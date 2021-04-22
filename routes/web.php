<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LocalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/save', [MController::class, 'save'])->name('saving');
Route::get('email/send', [EmailController::class, 'send'])->name('sending');

Route::get('{lang}',function ($lang){
	App()->setLocale($lang);
	return view('index');
})->name('index');

Route::get('form/{lang}',function ($lang){
	App()->setLocale($lang);
	return view('form');
})->name('form');

Route::get('lang/{lang}', [LocalController::class, 'index']);

