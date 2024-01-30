<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostDataController;

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
    return view('app');
})
->name('main');

Route::get('/page', function () {
    return view('app');
})
->name('page');

Route::get('/send', function () {
    return view('app');
})
->name('send');

Route::post('/send',[PostDataController::class, 'addDataBase'])->name('send-data');