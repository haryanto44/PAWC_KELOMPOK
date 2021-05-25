<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\listBuku;
use Illuminate\Http\Request;
use app\Http\Controllers\Buku_controller;

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
    $title = "<h2> OURBOOKS </h2>";
    return view('index');
});

Route::post('login', [userAuth::class, "UserLogin"]);
Route::view('profile', 'profile');


Route::get('login', function() {
    if(session()->has('user')){
        return redirect('profile');
    }
    return view('login');
});

Route::get('logout', function() {
    if(session()->has('user')){
        session()->forget('user');
    }
    return redirect('');
});

// list buku
	Route::get('profile/buku','Buku_controller@index');
	Route::get('profile/buku/add','Buku_controller@add');
	Route::post('profile/buku/add','Buku_controller@store');
	Route::get('profile/buku/{id}','Buku_controller@edit');
	Route::put('profile/buku/{id}','Buku_controller@update');
	Route::delete('profile/buku/{id}','Buku_controller@delete');

 // peminjaman buku
    Route::get('pinjam-buku/{id}','Peminjaman_controller@store');

Route::get('profile/daftar_buku', [listbuku::class, 'list_buku']);