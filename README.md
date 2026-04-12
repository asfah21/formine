
# 🏗️ FORMINE - Sistem P2H ONLINE Peralatan A2B PT GSI

**FORMINE** adalah sistem P2H Online berbasis web untuk memantau peralatan A2B pertambangan di lokasi proyek site CNI Wolo PT Gunung Samudera Internasional. Aplikasi ini menyediakan API public untuk integrasi dengan sistem lain (new).

---

## 📌 Deskripsi Fungsi

### 1. **Manajemen Peralatan (Equipment Management)**
Mengelola data P2H peralatan A2B pertambangan dengan detail lengkap:
- **Manhaul** - Transportasi personel/manpower.
- **Dump Truck** - Truk pengangkutan material.
- **Excavator (Exca)** - Penggalian dan pemindahan material
- **Compactor** - Pemadatan tanah, sub-base
- **Tower Lamp** - Lampu untuk pencahayaan lokasi
- **Bulldozer** - Bulldozer untuk pengolahan material
- **Grader** - Pemerataan dan pembetukan permukaan
- **Light Vehicle (LV)** - Kendaraan ringan untuk mobilitas dan support
- **Articulated Dump Truck (ADT)** - Truk dump bergerak/artikulasi

### 2. **Tracking Data Operasional**
Mencatat dan melacak setiap penggunaan peralatan:
- Data pengemudi/operator
- Nomor unit peralatan
- Tanggal penggunaan
- Shift kerja (Pagi/Siang/Malam)
- Status peralatan dan Item pendukungnya (Baik/Rusak)

### 3. **Tanda Tangan Digital (Digital Signature)**
Fitur untuk pengawas lokasi menandatangani setiap aktivitas peralatan:
- Monitoring penggunaan peralatan dan kerusakan bila ada
- Konfirmasi pengawas dengan e-sign

### 4. **Public API feature (New) for Farhan**
Menyediakan akses data melalui REST API yang aman:
- **API Key Authentication** - Validasi akses berdasarkan kunci API
- **IP Whitelist** - Pembatasan akses hanya dari IP yang terdaftar
- **Rate Limiting** - Proteksi dari abuse dengan limit 100 request/menit
- **CRUD Operations** - Baca, tambah, edit, dan hapus data

### 5. **Data Integration**
Memudahkan integrasi dengan sistem lain:
- Export/Import data peralatan
- Sinkronisasi real-time dengan sistem management lainnya

---

## 🔐 Keamanan Data

Aplikasi ini mengimplementasikan multiple layer security:

1. **API Key** - Setiap client harus memiliki kunci API unik
2. **IP Whitelist** - Hanya IP yang terdaftar dapat mengakses
3. **Rate Limiting** - Mencegah spam dan abuse
4. **Input Validation** - Validasi semua input data

---


## 📊 Dashboard Info

Informasi yang dapat dipantau:
- Total peralatan yang melakukan P2H
- Peralatan per kategori
- Penggunaan per shift
- Status operator/pengemudi
- Historical data trending
- Alert peralatan bermasalah
- Support Export Excel Data
- dll

---

## 🔧 Teknologi

- **Backend:** Laravel 11 (PHP 8.2+)
- **Database:** MySQL 8.0+
- **API:** RESTful API dengan JSON response
- **Security:** API Key + IP Whitelist + Rate Limiting
- **Documentation:** OpenAPI/Swagger ready

---

## 📥 Integrasi

API FORMINE dapat diintegrasikan dengan:
- ✅ Sistem ERP existing
- ✅ Mobile App untuk field operator
- ✅ Dashboard monitoring real-time
- ✅ Business Intelligence tools
- ✅ Automated reporting system

---

## 📞 Support

Untuk pertanyaan lebih lanjut mengenai fitur dan integrasi, hubungi tim development.

---

## 📄 License

Closed Source - All Rights Reserved © 2024 AZVAN IT
