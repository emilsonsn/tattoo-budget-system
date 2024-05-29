<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TattooController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('orcamento');
})->name('orcamento');

Route::get('/orcamento', function () {
    return view('orcamento');
})->name('orcamento');

Route::get('/mail', function () {
    return view('mail.clientMail');
})->name('mail');

Route::get('/orcamento-calculado', function () {
    return view('orcamento_calculado');
})->name('orcamento_calculado');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/tattoo-calc', [TattooController::class, 'calc'])->name('calc');
