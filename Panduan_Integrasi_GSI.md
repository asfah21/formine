# Panduan Integrasi Pengiriman Form ke GSI Corp

Dokumentasi ini menjelaskan cara mengimplementasikan fitur pengiriman data form (seperti P2H LV, P2H DT, P2H Exca, dll) dari *db-ku.com* (aplikasi lokal) secara otomatis ke server utama `gsicorp.com`.

Sistem ini menggunakan mekanisme **Queue (Antrian)** di background dengan dukungan otomatis **Retry 3 kali** jikalau API tujuan mengalami down/bermasalah atau jaringan sedang tidak stabil.

---

## 1. Konfigurasi Awal (.env)

Agar sistem dapat mengetahui target endpoint URL dari server `gsicorp.com`, Anda wajib menambahkan baris berikut pada bagian paling bawah file `.env`:

```env
GSI_API_URL="https://gsicorp.com/api/receive-p2h"
```

> **Catatan:** Ganti `https://gsicorp.com/api/receive-p2h` dengan alamat *endpoint* aktual yang siap menerima method `POST` di server gsicorp.

---

## 2. Cara Penggunaan (Dispatching Job)

Terdapat >10 jenis form yang berbeda di dalam aplikasi ini. Cara paling rapi (*clean*) tanpa perlu mengacak-acak controller & flow form (Filament) Anda adalah dengan memanfaatkan fitur **Eloquent Model Events**.

Kita menggunakan Event `created` yang otomatis terpanggil **hanya setelah** data P2H/form sukses tersimpan ke tabel lokal (`db-ku.com`).

### 📝 Contoh Penerapan (Misal pada Model `Dumptruck.php`)

Buka file model Anda (contoh `app/Models/Dumptruck.php`), dan tambahkan method `booted` jika belum ada:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Jobs\SendFormToGsiCorp; // <-- WAJIB IMPORT INI

class Dumptruck extends Model
{
    // .. kode anda sebelumnya ..

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        // Event ini dipicu HANYA setelah Data Dumptruck baru berhasil Disimpan di tabel lokal
        static::created(function ($model) {
            
            // Dispatch/kirim pengiriman data ke GSI Corp melalui sistem Antrian (Queue)
            // 'p2h_dt' adalah pengenal ID / Jenis form ini (Bisa anda sesuaikan)
            SendFormToGsiCorp::dispatch('p2h_dt', $model->toArray());

        });
    }
}
```

Daftar parameter yang dilempar `SendFormToGsiCorp::dispatch`:
1. **`$formType`** (String): Nama jenis form agar server gsicorp mengetahui jenis data yang masuk (contoh: `'p2h_lv'`, `'p2h_dt'`, `'p2h_exca'`).
2. **`$formData`** (Array): Seluruh baris data atau record dalam bentuk array (`$model->toArray()`).

> 💡 **TIPS:** Anda tinggal *copy-paste* blok fungsi `booted` ini ke lebih dari 10 Model form P2H Anda yang lainnya di dalam folder `app/Models/`. Cukup sesuaikan saja parameter pertama seperti `'p2h_lv'`, `'p2h_exca'`, dll.

---

## 3. Menjalankan Queue Worker

Karena kita telah mengatur mekanisme antrian (Queue) untuk berjalan di background (melalui `QUEUE_CONNECTION=database` di `.env`), maka *script worker/processor* antrian ini **wajib** selalu dijalankan agar pekerjaan yang masuk ke antrian segera dieksekusi.

**💻 Di Perangkat Lokal (Masa Development VS Code):**
Buka terminal/CMD baru di direktori ini, kemudian jalankan dan biarkan menyala:
```bash
php artisan queue:work
```
*(Catatan: Jika Anda sedang menjalankan `npm run dev` pada project ini saat ngoding, script antrian sudah ikut otomatis berjalan. Cukup direstart saja terminalnya jika baru saja mengubah file .env).*

**🚀 Di Server Produksi (VPS / db-ku.com Live):**
Jangan menggunakan perintah `php artisan queue:work` secara manual karena jika server restart, script akan mati. Anda **wajib** menggunakan program background manager seperti **Supervisor** di Ubuntu/Linux.

Contoh konfigurasi *Supervisor* (buat di `/etc/supervisor/conf.d/formine-queue.conf`):
```ini
[program:formine-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /lokasi/absolut/ke/direktori/formine/artisan queue:work --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
user=root
numprocs=1
redirect_stderr=true
stdout_logfile=/lokasi/absolut/ke/direktori/formine/storage/logs/worker.log
```
Lalu jalankan `supervisorctl reread`, `supervisorctl update`, dan `supervisorctl start formine-worker:*`.

---

## 4. Mekanisme Keamanan Timeout & Retry

- Ketika mencoba ngirim POST Data namun server API GSI *down* atau internet *disconnect*, proses HTTP akan otomatis *timeout* (dibatasi maksimal menunggu 30 detik untuk gagal).
- Jika responsnya gagal, Job ini di-*design* akan segera masuk mode **Retry (Mengulang)**.
- **Waktu Jeda Pengulangan (Backoff Retry):**
  1. Gagal pertama $\rightarrow$ menunda **10 detik** lalu mencobanya lagi.
  2. Gagal kedua $\rightarrow$ menunda **30 detik** lalu mencobanya lagi.
  3. Gagal ketiga $\rightarrow$ menunda **1 menit (60 detik)** lalu mencobanya lagi.
- Jika 3x masih tetap gagal, `Laravel` tidak akan menghapus data tersebut dari eksistensinya! Data tersebut akan digagalkan (_Failed_) kedalam tabel `failed_jobs` yang mana jika server `GSI Corp` sudah nyala lagi besoknya, Anda masih bisa mengetikkan `php artisan queue:retry all` untuk memaksakan pengiriman semua data yang sempat tertunda karena macet tsb.
