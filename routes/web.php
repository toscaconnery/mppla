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

/*----- HALAMAN USER UMUM -----*/

Route::get('/', function () {
    return view('timer.index');
});

Route::get('home', function () {
    return view('timer.index');
});

Route::get('kegiatanlab', 'LaboratoriumController@kegiatanlab');
Route::get('deskripsi-lab', 'LaboratoriumController@deskripsi_lab');
Route::get('jadwal-lab', 'LaboratoriumController@lihat_jadwal');

//Route::get('index2', 'TestController@index');

//Route::get('deskripsi-laboratorium', 'LaboratoriumController@index');


/******** HALAMAN LOGIN ********/
//Route::get('login', 'LoginController@index');


//Menampilkan halaman laboratorium
//Route::get('deskripsi-laboratorium', 'LaboratoriumController@index');
//Menampilkan halaman tambah deskripsi laboratorium
//Route::get('tambahkan-deskripsi-laboratorium', 'LaboratoriumController@create');
//Route::get('tambah-deskripsi-lab', 'LaboratoriumController@tambah_deskripsi_lab');
//Menyimpan data dari form Tambah Deskripsi Lab
//Route::post('tambahkan-deskripsi-laboratorium', 'LaboratoriumController@storedeskripsi');
//Menampilkan halaman kegiatan lab
//Route::get('lihat-kegiatan-lab', 'LaboratoriumController@lihatkegiatan');
//Menampilkan halaman input kegiatan lab
//Route::get('input-kegiatan-lab', 'LaboratoriumController@inputkegiatan');
//Menampilkan halaman jadwal lab


/******** LAB ********/
//Menampilkan index untuk admin
Route::get('index-admin', 'AdminController@index');

//Menampilkan halaman input deskripsi
Route::get('inputdeskripsi', 'AdminController@input_deskripsi');
Route::post('inputdeskripsi', 'AdminController@inputdesc');
//Menampilkan halaman input fasilitas lab
Route::get('inputfasil', 'FasilController@input_fasil');
Route::post('inputfasil', 'FasilController@inputfasil');
//Menampilkan halaman list admin
Route::get('listfasil', 'FasilController@list_fasil'); 
//Menampilkan halaman input kegiatan lab
Route::get('inputkegiatan', 'KegiatanController@input_kegiatan');
Route::post('inputkegiatan', 'KegiatanController@inputkegiatan');



/******** HALAMAN PINJAM *******/
//Menampilkan index untuk pinjam
Route::get('pinjam', 'PinjamController@index');
//Menyimpan permintaan reservasi/pinjam
Route::post('pinjam', 'PinjamController@lakukan_reservasi');
//Melihat jadwal peminjaman lab
Route::get('lihat_jadwal','PinjamController@lihat_jadwal');
Route::get('lihatjadwal','PinjamController@Melihat_jadwal_lab');
//Menampilkan halaman verifikasi peminjaman lab
Route::get('verifpeminjaman', 'PinjamController@verif_pinjam');
//Menampilkan halaman list admin
Route::get('listpeminjaman', 'PinjamController@list_pinjam');


/******** ADMIN *******/
//Menampilkan halaman input admin
Route::get('inputadmin', 'AdminController@input_admin');
//Menampilkan halaman list admin
Route::get('listadmin', 'AdminController@list_admin');


/******** LBE *******/
//Menampilkan halaman input tugas LBE
Route::get('inputtugas', 'LBEController@inputtugas');
Route::post('inputtugas', 'LBEController@input_tugas');
//Menampilkan halaman lihat daftar tugas LBE
Route::get('listtugas', 'LBEController@listtugas');
//Menampilkan halaman untuk donlod progres
Route::get('downloadprogres', 'LBEController@downloadprogres');
//Menampilkan halaman upload modul LBE
Route::get('inputmodul', 'ModulController@inputmodul');



Auth::routes();

