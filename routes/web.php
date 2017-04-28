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
//Route::get('tambah-deskripsi-lab', 'LaboratoriumController@tambah_deskripsi_lab');
//Menyimpan data dari form Tambah Deskripsi Lab
//Route::post('tambahkan-deskripsi-laboratorium', 'LaboratoriumController@storedeskripsi');
//Menampilkan halaman kegiatan lab
Route::get('lihat-kegiatan-lab', 'LaboratoriumController@lihatkegiatan');
//Menampilkan halaman input kegiatan lab
//Route::get('input-kegiatan-lab', 'LaboratoriumController@inputkegiatan');
//Menampilkan halaman jadwal lab
Route::get('jadwal-lab', 'LaboratoriumController@lihat_jadwal');

/******** HALAMAN ADMIN ********/
//Menampilkan index untuk admin
Route::get('index-admin', 'AdminController@index');
//Menampilkan halaman input deskripsi
Route::get('inputdeskripsi', 'AdminController@input_deskripsi');
//Menampilkan halaman input fasilitas lab
Route::get('inputfasil', 'AdminController@input_fasil');
//Menampilkan halaman input admin
Route::get('inputadmin', 'AdminController@input_admin');
//Menampilkan halaman input kegiatan lab
Route::get('inputkegiatan', 'AdminController@input_kegiatan');
//Menampilkan halaman list admin
Route::get('listadmin', 'AdminController@list_admin');
//Menampilkan halaman list admin
Route::get('listfasil', 'AdminController@list_fasil');
//Menampilkan halaman list admin
Route::get('listpeminjaman', 'AdminController@list_pinjam');
//Menampilkan halaman verifikasi peminjaman lab
Route::get('verifpeminjaman', 'AdminController@verif_pinjam');


/******** HALAMAN PINJAM *******/
//Menampilkan index untuk pinjam
Route::get('pinjam', 'PinjamController@index');
//Menyimpan permintaan reservasi/pinjam
Route::post('pinjam', 'PinjamController@lakukan_reservasi');
//Melihat jadwal peminjaman lab
Route::get('lihat_jadwal','PinjamController@lihat_jadwal');

