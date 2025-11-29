<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Manhaul;
use App\Models\DumpTruck;
use App\Models\Exca;
use App\Models\Compactor;
use App\Models\Towerlamp;
use App\Models\Dozer;
use App\Models\Grader;
use App\Models\Lv;
use App\Models\Adt;
use App\Http\Controllers\ExcaController;
use App\Http\Controllers\DumpTruckController;
use App\Http\Controllers\ManhaulController;
use App\Http\Controllers\CompactorController;
use App\Http\Controllers\TowerlampController;
use App\Http\Controllers\BulldozerController;
use App\Http\Controllers\GraderController;
use App\Http\Controllers\LvController;
use App\Http\Controllers\AdtController;
use App\Http\Middleware\ValidateApiKey;

// ===== PUBLIC API ROUTES (API Key + Rate Limit + Whitelist API) =====

// Periksa ValidateApiKey.php untuk Whitelist IP
// Rate Limit: 100 requests per minute per API Key
Route::middleware(['throttle:100,1', ValidateApiKey::class])->group(function () {

    // === MANHAUL ROUTES ===
Route::get('manhaul', function() {
    $data = Manhaul::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('manhaul', [ManhaulController::class, 'store']);
Route::get('manhaul/{id}', function($id) {
    $data = Manhaul::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('manhaul/{id}', function($id, Request $request) {
    $data = Manhaul::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('manhaul/{id}', function($id) {
    $data = Manhaul::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('manhaul/{name}/{aptnumx}', [ManhaulController::class, 'showx']);
Route::post('manhaul/ttd/pengawas', [ManhaulController::class, 'ttdPW']);

// === DUMP TRUCK ROUTES ===
Route::get('dumptruck', function() {
    $data = DumpTruck::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('dumptruck', [DumpTruckController::class, 'store']);
Route::get('dumptruck/{id}', function($id) {
    $data = DumpTruck::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('dumptruck/{id}', function($id, Request $request) {
    $data = DumpTruck::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('dumptruck/{id}', function($id) {
    $data = DumpTruck::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('dumptruck/{name}/{aptnumx}', [DumpTruckController::class, 'showx']);
Route::post('dumptruck/ttd/pengawas', [DumpTruckController::class, 'ttdPW']);

// === EXCA ROUTES ===
Route::get('exca', function() {
    $data = Exca::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('exca', [ExcaController::class, 'store']);
Route::get('exca/{id}', function($id) {
    $data = Exca::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('exca/{id}', function($id, Request $request) {
    $data = Exca::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('exca/{id}', function($id) {
    $data = Exca::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('exca/{name}/{aptnumx}', [ExcaController::class, 'showx']);
Route::post('exca/ttd/pengawas', [ExcaController::class, 'ttdEX']);
Route::get('drivers', [ExcaController::class, 'index']);

// === COMPACTOR ROUTES ===
Route::get('compactor', function() {
    $data = Compactor::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('compactor', [CompactorController::class, 'store']);
Route::get('compactor/{id}', function($id) {
    $data = Compactor::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('compactor/{id}', function($id, Request $request) {
    $data = Compactor::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('compactor/{id}', function($id) {
    $data = Compactor::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('compactor/{name}/{aptnumx}', [CompactorController::class, 'showx']);
Route::post('compactor/ttd/pengawas', [CompactorController::class, 'ttdEX']);

// === TOWER LAMP ROUTES ===
Route::get('towerlamp', function() {
    $data = Towerlamp::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('towerlamp', [TowerlampController::class, 'store']);
Route::get('towerlamp/{id}', function($id) {
    $data = Towerlamp::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('towerlamp/{id}', function($id, Request $request) {
    $data = Towerlamp::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('towerlamp/{id}', function($id) {
    $data = Towerlamp::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('towerlamp/{name}/{aptnumx}', [TowerlampController::class, 'showx']);
Route::post('towerlamp/ttd/pengawas', [TowerlampController::class, 'ttdEX']);

// === BULLDOZER ROUTES ===
Route::get('bulldozer', function() {
    $data = Dozer::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('bulldozer', [BulldozerController::class, 'store']);
Route::get('bulldozer/{id}', function($id) {
    $data = Dozer::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('bulldozer/{id}', function($id, Request $request) {
    $data = Dozer::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('bulldozer/{id}', function($id) {
    $data = Dozer::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('bulldozer/{name}/{aptnumx}', [BulldozerController::class, 'showx']);
Route::post('bulldozer/ttd/pengawas', [BulldozerController::class, 'ttdBD']);

// === MOTOR GRADER ROUTES ===
Route::get('grader', function() {
    $data = Grader::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('grader', [GraderController::class, 'store']);
Route::get('grader/{id}', function($id) {
    $data = Grader::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('grader/{id}', function($id, Request $request) {
    $data = Grader::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('grader/{id}', function($id) {
    $data = Grader::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('grader/{name}/{aptnumx}', [GraderController::class, 'showx']);
Route::post('grader/ttd/pengawas', [GraderController::class, 'ttdBD']);

// === LV ROUTES ===
Route::get('lv', function() {
    $data = Lv::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('lv', [LvController::class, 'store']);
Route::get('lv/{id}', function($id) {
    $data = Lv::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('lv/{id}', function($id, Request $request) {
    $data = Lv::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('lv/{id}', function($id) {
    $data = Lv::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('lv/{name}/{aptnumx}', [LvController::class, 'showx']);
Route::post('lv/ttd/pengawas', [LvController::class, 'ttdBD']);

// === ADT ROUTES ===
Route::get('adt', function() {
    $data = Adt::all();
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::post('adt', [AdtController::class, 'store']);
Route::get('adt/{id}', function($id) {
    $data = Adt::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::put('adt/{id}', function($id, Request $request) {
    $data = Adt::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->update($request->all());
    return response()->json(['status' => 'success', 'data' => $data], 200);
});
Route::delete('adt/{id}', function($id) {
    $data = Adt::find($id);
    if (!$data) return response()->json(['status' => 'error', 'message' => 'Not found'], 404);
    $data->delete();
    return response()->json(['status' => 'success', 'message' => 'Deleted'], 200);
});
Route::get('adt/{name}/{aptnumx}', [AdtController::class, 'showx']);
Route::post('adt/ttd/pengawas', [AdtController::class, 'ttdBD']);

}); // End of middleware group
