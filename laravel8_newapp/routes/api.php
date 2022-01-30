<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/transaksi', TransaksiController::class);
// Route::get('/transaction', [TransaksiController::class,'index']);
// Route::post('/transaction', [TransaksiController::class,'store']);
// Route::get('/transaction/{id}', [TransaksiController::class,'show']);
// Route::put('/transaction/{id}', [TransaksiController::class,'update']);
// Route::delete('/transaction/{id}', [TransaksiController::class,'destroy']);

