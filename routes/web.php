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
    return view ('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about ', 'About@halaman_about');
Route::get('/create', 'Create@halaman_create');
Route::get('/update', 'Update@halaman_update');
Route::get('/delete', 'Delete@halaman_delete');

Route::get('/home',[App\Httpcontrollers\Homecontroller::class, 'index'])->name('home');
Route::get('/home', 'Homecontroller@index');
Route::get('/about', function (){ 
    $data = [
    'pageTitle' => 'Tentang Kami',
    'content' => 'Ini adalah halaman tentang kami.'
];
return view('about', $data);

});
Route::get('/produk','App\Http\controllers\produkcontroller@index');





