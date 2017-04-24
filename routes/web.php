<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('timer.index');
});


//Route::get('deskripsi-laboratorium', 'LaboratoriumController@index');


//Menampilkan halaman laboratorium
Route::get('deskripsi-laboratorium', 'LaboratoriumController@index');
Route::get('deskripsi-lab', 'LaboratoriumController@deskripsi_lab');
//Menampilkan halaman tambah deskripsi laboratorium
Route::get('tambahkan-deskripsi-laboratorium', 'LaboratoriumController@create');
Route::get('tambah-deskripsi-lab', 'LaboratoriumController@tambah_deskripsi_lab');
//Menyimpan data dari form Tambah Deskripsi Lab
Route::post('tambahkan-deskripsi-laboratorium', 'LaboratoriumController@storedeskripsi');
//Menampilkan halaman kegiatan lab
Route::get('lihat-kegiatan-lab', 'LaboratoriumController@lihatkegiatan');
//Menampilkan halaman input kegiatan lab
Route::get('input-kegiatan-lab', 'LaboratoriumController@inputkegiatan');
//Menampilkan halaman jadwal lab
Route::get('jadwal-lab', 'LaboratoriumController@lihat_jadwal');