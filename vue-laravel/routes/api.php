<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\FileUploadController;
use App\Http\Controllers\API\NewPasswordController;

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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::post('logout', [RegisterController::class, 'logout'])->middleware('auth:api');

Route::middleware('auth:api')->group(function (){
    Route::resource('products', ProductController::class);
    Route::post('upload', [FileUploadController::class, 'store'])->name('file.upload');
    Route::post('forgot-password', [NewPasswordController::class, 'forgotPassword'])->name('password.forget');
    Route::post('reset-password', [NewPasswordController::class, 'reset'])->name('password.reset');
});

