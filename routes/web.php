<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/dashboard', function(){
    return view('dashboard' , [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
});
Route::get('/menu', function(){
    return view('menu', [
        'title' => 'Menu Rekomendasi',
        'active' => 'menu',
    ]);
});
Route::get('/riwayat', function(){
    return view('riwayat', [
        'title' => 'Riwayat Saya',
        'active' => 'riwayat',
    ]);
});