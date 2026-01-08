<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AppFrontendController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AppFrontendController::class, 'home']);
Route::post('/contact', [AppFrontendController::class, 'store']);
Route::post('/contact', [AppFrontendController::class, 'send'])
    ->name('contact.send');