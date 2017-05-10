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
Route::get('jadikan_admin/{id}', 'AdminController@jadikan_admin');
Route::post('update_jadikan_admin/{id}', 'AdminController@update_jadikan_admin');
Route::get('nonaktifkan_admin/{id}', 'AdminController@nonaktifkan_admin');
Route::get('update_nonaktifkan_admin/{id}', 'AdminController@update_nonaktifkan_admin');


//Menampilkan halaman input deskripsi
Route::get('inputdeskripsi', 'AdminController@input_deskripsi');
Route::post('inputdeskripsi', 'AdminController@inputdesc');
//Menampilkan halaman input fasilitas lab
Route::get('inputfasil', 'FasilController@input_fasil');
Route::post('inputfasil', 'FasilController@inputfasil');
//Menampilkan halaman list admin
<<<<<<< HEAD
Route::get('listfasil', 'FasilController@list_fasil'); 
=======
Route::get('listfasil', 'FasilController@list_fasil');

Route::get('inputfasil', 'AdminController@input_fasil');
 


//Menampilkan halaman input admin
Route::get('inputadmin', 'AdminController@input_admin');
//Menampilkan halaman list admin
Route::get('listadmin', 'AdminController@list_admin');
//Menampilkan halaman list admin
Route::get('listpeminjaman', 'AdminController@list_pinjam');

>>>>>>> 69c5fa06ea87552e381ef6aa4ffadd186c0fe42e
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


<<<<<<< HEAD
=======
/******** HALAMAN DOSEN *******/
Route::get('tambahkan_dosen', 'DosenController@tambahkan_dosen');
Route::post('tambahkan_dosen', 'DosenController@store_dosen');
Route::get('list_dosen', 'DosenController@list_dosen');
Route::get('detail_dosen/{id}', 'DosenController@detail_dosen');
Route::get('edit_dosen/{id}', 'DosenController@edit_dosen');
Route::post('edit_dosen/{id}', 'DosenController@update_dosen');


/******** HALAMAN USER *******/
Route::get('list_user', 'UserController@list_user');


/******** HALAMAN LABORATORIUM *******/
Route::get('list-laboratorium', 'LaboratoriumController@list_laboratorium');
Route::get('pengaturan-laboratorium/{id}', 'LaboratoriumController@pengaturan_laboratorium');
Route::post('pengaturan-laboratorium/{id}', 'LaboratoriumController@save_pengaturan_laboratorium');
Route::get('tambahkan-dosen-laboratorium', 'LaboratoriumController@tambahkan_dosen_laboratorium');
Route::post('tambahkan-dosen-laboratorium', 'LaboratoriumController@save_tambahkan_dosen_laboratorium');
>>>>>>> 69c5fa06ea87552e381ef6aa4ffadd186c0fe42e

Auth::routes();

