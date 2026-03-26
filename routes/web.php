<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
});

// Baris yang diperbaiki
Route::get('/about', function () {
    // 1. Buat variabel yang berisi data
    $nama_saya = "Ganendra";

    // 2. Kirim variabel itu ke view sebagai argumen kedua
    // 'nama' adalah kunci yang akan kita panggil di view
    return view('about', ['nama' => $nama_saya]);
});

Route::get('/project', function(){
    return view('project');
});

Route::get('/products', [ProductController::class, 'index']);
