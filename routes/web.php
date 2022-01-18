<?php

use Illuminate\Support\Facades\Route;

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
    return view('Home');
});
Route::get('/', function () {
    return view('About');
});
Route::get('/', function () {
    return view('Gallery');
});

Route::get('/about', function () {
    return view('About',[
        "nama"=>"Afridho Nur Zaki",
    "email"=>"dashdho2@gmail.com",
"gambar"=>"afridho.jpg"]);
});



