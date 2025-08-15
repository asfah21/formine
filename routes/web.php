<?php
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ManhaulController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;
use App\Filament\Pages\Profile;
use App\Http\Controllers\AdtController;
use App\Http\Controllers\AllHasilController;
use App\Http\Controllers\BulldozerController;
use App\Http\Controllers\CompactorController;
use App\Http\Controllers\DumpTruckController;
use App\Http\Controllers\ExcaController;
use App\Http\Controllers\GraderController;
use App\Http\Controllers\LvController;
use App\Http\Controllers\TestkuController;
use App\Models\DumpTruckForm;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FormITController;
use App\Models\Exca;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\P5MController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\SesiAbsensiController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CertController;
use App\Http\Controllers\SesiCertController;
use App\Http\Controllers\StockController;
use App\Models\SesiCert;

//Start Stock Route
Route::get('stock', [StockController::class, 'index'])->name('stock.index');
Route::post('stock/store', [StockController::class, 'store'])->name('stock.store');

// Halaman autentikasi sebelum masuk ke "Barang Masuk" dan "Barang Keluar"
Route::get('stock/auth', function () {return view('stock.auth');})->name('stock.auth');

Route::post('stock/auth', function (Request $request) {
    if ($request->password === env('STOCK_PASSWORD')) { // Ganti dengan password yang kamu inginkan
        session(['password_stock' => true]); // Simpan status autentikasi di sesi
        return redirect()->intended(route('stock.in')); // Kembali ke halaman yang diminta
    }
    sleep(rand(1, 3));
    return back()->with('error', 'Password salah!');
})->middleware('throttle:5,30')->name('stock.auth.submit');

// Proteksi halaman "Barang Masuk" & "Barang Keluar" dengan session auth
Route::get('stock/in', function (Request $request) {
    if (!$request->session()->has('password_stock')) {
        return redirect()->route('stock.auth'); // Jika belum autentikasi, minta password
    }
    return app(StockController::class)->createIn($request);
})->name('stock.in');

Route::get('stock/out', function (Request $request) {
    if (!$request->session()->has('password_stock')) {
        return redirect()->route('stock.auth'); // Jika belum autentikasi, minta password
    }
    return app(StockController::class)->createOut($request);
})->name('stock.out');
//End Stock Route

// Routing untuk Sesi Absensi
Route::get('/absensi', [SesiAbsensiController::class, 'index'])->name('absensi.index');
Route::get('/absensi/create', [SesiAbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi/store', [SesiAbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi/{id}', [SesiAbsensiController::class, 'show'])->name('absensi.show');
Route::get('absensi/cert/{id}/{name}', [SesiAbsensiController::class, 'cert'])->name('certs.show'); //Sertifikat

// Routing untuk Absensi
Route::get('/attendance/{unique_code}', [AbsensiController::class, 'form'])->name('absensi.form');
Route::post('/attendance/{unique_code}/submit', [AbsensiController::class, 'submit'])->name('absensi.submit');

Route::delete('/absensi/{id}', function ($id) {
    $absensi = \App\Models\Absensi::findOrFail($id);
    $absensi->delete();

    return redirect()->back()->with('success', 'Absensi berhasil dihapus.');
})->name('absensi.destroy');
// End Absensi dan Sesi

// START CERT, Public route: tetap bisa diakses tanpa password
Route::get('/cert/auth', function () {
    return view('cert.auth');
})->name('cert.auth');

Route::post('/cert/auth', function (Request $request) {
    if ($request->password === env('CERT_PASSWORD')) { // Ganti dengan password yang kamu mau
        session(['cert_auth' => true]);
        return redirect()->intended('/cert');
    }
    sleep(rand(1, 3)); //sleep random
    return back()->with('error', 'Password salah!');
})->middleware('throttle:5,30')->name('cert.auth.submit');

// === Public ===
Route::get('cert/detail/{id}/{name}', [SesiCertController::class, 'cert'])->name('cert.detail');

// === Proteksi manual di route untuk semua yang lain ===
Route::get('/cert', function (Request $request) {
    if (!$request->session()->has('cert_auth')) {
        return redirect()->route('cert.auth');
    }
    return app(SesiCertController::class)->index($request);
})->name('cert.index');

Route::get('/cert/create', function (Request $request) {
    if (!$request->session()->has('cert_auth')) {
        return redirect()->route('cert.auth');
    }
    return app(SesiCertController::class)->create($request);
})->name('cert.create');

Route::post('/cert/store', function (Request $request) {
    if (!$request->session()->has('cert_auth')) {
        return redirect()->route('cert.auth');
    }
    return app(SesiCertController::class)->store($request);
})->name('cert.store');

Route::get('/cert/{id}', function (Request $request, $id) {
    if (!$request->session()->has('cert_auth')) {
        return redirect()->route('cert.auth');
    }
    return app(SesiCertController::class)->show($request, $id);
})->name('cert.show');

Route::delete('/cert/{id}', function (Request $request, $id) {
    if (!$request->session()->has('cert_auth')) {
        return redirect()->route('cert.auth');
    }
    $absensi = \App\Models\Cert::findOrFail($id);
    $absensi->delete();
    return redirect()->back()->with('success', 'Sertifikat berhasil dihapus.');
})->name('cert.destroy');

// === Tetap tanpa proteksi ===
Route::get('/serti/{unique_code}', [CertController::class, 'form'])->name('cert.form');
Route::post('/serti/{unique_code}/submit', [CertController::class, 'submit'])->name('cert.submit');
//END CERT

// Routing untuk Sesi Sertifikat
// Route::get('/cert', [SesiCertController::class, 'index'])->name('cert.index');
// Route::get('/cert/create', [SesiCertController::class, 'create'])->name('cert.create');
// Route::post('/cert/store', [SesiCertController::class, 'store'])->name('cert.store');
// Route::get('/cert/{id}', [SesiCertController::class, 'show'])->name('cert.show');
// Route::get('cert/detail/{id}/{name}', [SesiCertController::class, 'cert'])->name('cert.detail');

// Route::get('/serti/{unique_code}', [CertController::class, 'form'])->name('cert.form');
// Route::post('/serti/{unique_code}/submit', [CertController::class, 'submit'])->name('cert.submit');

// Route::delete('/cert/{id}', function ($id) {
//     $absensi = \App\Models\Cert::findOrFail($id);
//     $absensi->delete();

//     return redirect()->back()->with('success', 'Sertifikat berhasil dihapus.');
// })->name('cert.destroy');
// // End Sertifikat dan Sesi

Route::resource('p5m', P5MController::class);

Route::get('/', function () {
    return view('welcome');
})->name('welcome.show');

Route::get('/survey', function () {
    return view('survey');
})->name('surveys.form');

Route::get('/form-manhaul', function () {
    return view('form-manhaul');
})->name('forms.form');

Route::get('/home', function () {
    return view('home');
})->name('home.show'); // return view tanpa controller

Route::get('/details', function () {
    return view('details');
})->name('details.show'); // return view tanpa controller

Route::get('/pam-sop', function () {
    return view('pam-sop');
})->name('pam.show'); // return view tanpa controller

Route::get('/it-wo', function () {
    return view('it-wo');
})->name('it.show'); // return view tanpa controller

Route::get('/hse-sop', function () {
    return view('hse-sop');
})->name('hse.show'); // return view tanpa controller

Route::resource('wo_it', WorkOrderController::class);
Route::resource('todo', ToDoController::class);
// Route::resource('workorders', WorkOrderController::class)->except(['show']);


Route::resource('attendance', AttendanceController::class);

Route::post('/survey', [SurveyController::class, 'stored'])->name('surveys.store');

//Manhaul Route
Route::get('/form-manhaul', [ManhaulController::class, 'showForm'])->name('form-manhaul');
Route::post('/form-manhaul', [ManhaulController::class, 'store'])->name('form-manhaul');
Route::post('/ttd-pengawas', [ManhaulController::class, 'ttdPW'])->name('ttd-pengawas');
Route::get('/hasil-manhaul', [ManhaulController::class, 'hasilMH'])->name('hasil-manhaul');
Route::get('/detail-mh/{name}/{aptnumx}', [ManhaulController::class, 'showx'])->name('detailMh.show');

//DT Route
Route::get('/form-dumptruck', [DumpTruckController::class, 'showForm'])->name('form-dumptruck');
Route::post('/form-dumptruck', [DumpTruckController::class, 'store'])->name('form-dumptruck');
Route::post('/ttd-pengawas-dt', [DumpTruckController::class, 'ttdPW'])->name('ttd-pengawas-dt');
Route::get('/hasil-dumptruck', [DumpTruckController::class, 'hasilDT'])->name('hasil-dumptruck');
Route::get('/detail-dt/{name}/{aptnumx}', [DumpTruckController::class, 'showx'])->name('detailDt.show');

//Exca Route
Route::get('/form-exca', [ExcaController::class, 'showForm'])->name('form-exca');
Route::post('/form-exca', [ExcaController::class, 'store'])->name('form-exca');
Route::post('/ttd-pengawas-exca', [ExcaController::class, 'ttdEX'])->name('ttd-pengawas-exca');
Route::get('/hasil-exca', [ExcaController::class, 'hasilEX'])->name('hasil-exca');
Route::get('/detail-exca/{name}/{aptnumx}', [ExcaController::class, 'showx'])->name('detailExca.show');

Route::get('/IniAdalahListNamaKaryawanPTGSIPer16Januari2025', [ExcaController::class, 'index']);

//Compactor / Vibro Route
Route::get('/form-cp', [CompactorController::class, 'showForm'])->name('form-cp');
Route::post('/form-cp', [CompactorController::class, 'store'])->name('form-cp');
Route::post('/ttd-pengawas-cp', [CompactorController::class, 'ttdEX'])->name('ttd-pengawas-cp');
Route::get('/hasil-cp', [CompactorController::class, 'hasilCp'])->name('hasil-cp');
Route::get('/detail-cp/{name}/{aptnumx}', [CompactorController::class, 'showx'])->name('detailCp.show');

//Bulldozer Route
Route::get('/form-bd', [BulldozerController::class, 'showForm'])->name('form-bd');
Route::post('/form-bd', [BulldozerController::class, 'store'])->name('form-bd');
Route::post('/ttd-pengawas-bd', [BulldozerController::class, 'ttdBD'])->name('ttd-pengawas-bd');
Route::get('/hasil-bd', [BulldozerController::class, 'hasilBd'])->name('hasil-bd');
Route::get('/detail-bd/{name}/{aptnumx}', [BulldozerController::class, 'showx'])->name('detailBd.show');

//Motor Grader Route
Route::get('/form-mg', [GraderController::class, 'showForm'])->name('form-mg');
Route::post('/form-mg', [GraderController::class, 'store'])->name('form-mg');
Route::post('/ttd-pengawas-mg', [GraderController::class, 'ttdBD'])->name('ttd-pengawas-mg');
Route::get('/hasil-mg', [GraderController::class, 'hasilMg'])->name('hasil-mg');
Route::get('/detail-mg/{name}/{aptnumx}', [GraderController::class, 'showx'])->name('detailMg.show');

//Lv Route
Route::get('/form-lv', [LvController::class, 'showForm'])->name('form-lv');
Route::post('/form-lv', [LvController::class, 'store'])->name('form-lv');
Route::post('/ttd-pengawas-lv', [LvController::class, 'ttdBD'])->name('ttd-pengawas-lv');
Route::get('/hasil-lv', [LvController::class, 'hasilLv'])->name('hasil-lv');
Route::get('/detail-lv/{name}/{aptnumx}', [LvController::class, 'showx'])->name('detailLv.show');

//Adt Route
Route::get('/form-adt', [AdtController::class, 'showForm'])->name('form-adt');
Route::post('/form-adt', [AdtController::class, 'store'])->name('form-adt');
Route::post('/ttd-pengawas-adt', [AdtController::class, 'ttdBD'])->name('ttd-pengawas-adt');
Route::get('/hasil-adt', [AdtController::class, 'hasilAdt'])->name('hasil-adt');
Route::get('/detail-adt/{name}/{aptnumx}', [AdtController::class, 'showx'])->name('detailAdt.show');

//Feedback Route
Route::post('/submit-feedback', [FeedbackController::class, 'submitFeedback'])->name('feedback.submit');

//Hasil All Route
Route::get('/hasil-all', [AllHasilController::class, 'hasilAll'])->name('hasil-all');
// Route::get('/detail-inspection/{id}', [AllHasilController::class, 'showFormInspection'])->name('detail-inspection');

//form_st_perangkat Route
Route::get('/form_st_perangkat', [FormITController::class, 'showForm'])->name('form_st_perangkat');
Route::post('/form_st_perangkat', [FormITController::class, 'store'])->name('form_st_perangkat');

Route::post('/ttd-pengawas-exca', [FormITController::class, 'ttdEX'])->name('ttd-pengawas-exca');
Route::get('/hasil-form-it', [FormITController::class, 'hasilForm'])->name('hasil-form-it');
Route::get('/detail-form/{name}/{aptnumx}', [FormITController::class, 'showx'])->name('detailForm.show');

//form_st_barang Route
Route::get('/form_st_barang', [FormITController::class, 'showFormBarang'])->name('form_st_barang');
Route::post('/form_st_barang', [FormITController::class, 'store'])->name('form_st_barang');

Route::post('/ttd-pengawas-exca', [FormITController::class, 'ttdEX'])->name('ttd-pengawas-exca');
Route::get('/hasil-form-it', [FormITController::class, 'hasilForm'])->name('hasil-form-it');
Route::get('/detail-form/{name}/{aptnumx}', [FormITController::class, 'showx'])->name('detailForm.show');

Route::get('/azvan-it', function () {
    return view('azvan-it');
})->name('azvan-it.form'); //only return view without controller


