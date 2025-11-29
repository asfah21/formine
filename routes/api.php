<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcaController;

Route::get('/drivers', [ExcaController::class, 'index']);

// use Illuminate\Support\Facades\Route;

Route::get('/data', function () {
    return response()->json([
        'status' => 'success',
        'data' => [
            ['id' => 1, 'name' => 'Alpha'],
            ['id' => 2, 'name' => 'Beta'],
        ]
    ]);
});
