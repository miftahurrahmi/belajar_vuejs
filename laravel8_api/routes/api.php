<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::resource('/transaction', TransactionController::class);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::resource('/post', PostController::class);

});
// Route::get('/transaction', [TransactionController::class,'index']);
// Route::post('/transaction', [TransactionController::class,'store']);
// Route::get('/transaction/{id}', [TransactionController::class,'show']);
// Route::put('/transaction/{id}', [TransactionController::class,'update']);
// Route::delete('/transaction/{id}', [TransactionController::class,'destroy']);






