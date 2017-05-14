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

//Menampilkan halaman melihat data user lain
Route::get('lihatuser', 'AdminController@lihatuser');


/******** HALAMAN ADMIN *******/
Route::get('inputadmin', 'AdminController@input_admin');
Route::get('list-administrator', 'AdminController@list_administrator');
Route::get('index-admin', 'AdminController@index');
Route::get('jadikan_admin/{id}', 'AdminController@jadikan_admin');
Route::post('update_jadikan_admin/{id}', 'AdminController@update_jadikan_admin');
Route::get('nonaktifkan_admin/{id}', 'AdminController@nonaktifkan_admin');
Route::get('update_nonaktifkan_admin/{id}', 'AdminController@update_nonaktifkan_admin');
//Route::get('listpeminjaman', 'AdminController@list_pinjam'); Untuk dicek

/******** LBE *******/
Route::get('inputtugas', 'LBEController@inputtugas');
Route::post('inputtugas', 'LBEController@input_tugas');
Route::get('listtugas', 'LBEController@listtugas');
Route::get('downloadprogres', 'LBEController@downloadprogres');
Route::get('inputmodul', 'ModulController@inputmodul');

/******** HALAMAN DOSEN *******/
Route::get('tambahkan-dosen', 'DosenController@tambahkan_dosen');
Route::post('tambahkan-dosen', 'DosenController@store_tambahkan_dosen');
Route::get('list-dosen', 'DosenController@list_dosen');
Route::get('detail-dosen/{id}', 'DosenController@detail_dosen');
Route::get('edit-dosen/{id}', 'DosenController@edit_dosen');
Route::post('edit-dosen/{id}', 'DosenController@update_dosen');


/******** HALAMAN USER *******/
Route::get('list-user', 'UserController@list_user');
Route::get('profil/{id}', 'UserController@profil');
Route::post('profil/{id}', 'UseerController@update_profil');
Route::get('detail-user/{id}', 'UserController@detail_user');


/******** HALAMAN LABORATORIUM *******/
Route::get('list-laboratorium', 'LaboratoriumController@list_laboratorium');
Route::get('pengaturan-laboratorium/{id}', 'LaboratoriumController@pengaturan_laboratorium');
Route::post('pengaturan-laboratorium/{id}', 'LaboratoriumController@save_pengaturan_laboratorium');
Route::get('tambahkan-dosen-laboratorium', 'LaboratoriumController@tambahkan_dosen_laboratorium');
Route::post('tambahkan-dosen-laboratorium', 'LaboratoriumController@save_tambahkan_dosen_laboratorium');
Route::get('tambahkan-laboratorium', 'LaboratoriumController@tambahkan_laboratorium');
Route::post('tambahkan-laboratorium', 'LaboratoriumController@save_tambahkan_laboratorium');
Route::get('edit-deskripsi-laboratorium/{id}', 'LaboratoriumController@edit_deskripsi_laboratorium');
Route::post('edit-deskripsi-laboratorium/{id}', 'LaboratoriumController@save_edit_deskripsi_laboratorium');
Route::get('tambahkan-fasilitas-laboratorium', 'LaboratoriumController@tambahkan_fasilitas_laboratorium');
Route::post('tambahkan-fasilitas-laboratorium', 'LaboratoriumController@save_tambahkan_fasilitas_laboratorium');
Route::get('edit-fasilitas-laboratorium/{id}', 'LaboratoriumController@edit_fasilitas_laboratorium');
Route::post('edit-fasilitas-laboratorium/{id}', 'LaboratoriumController@save_edit_fasilitas_laboratorium');
Route::get('list-fasilitas-laboratorium', 'LaboratoriumController@list_fasilitas_laboratorium');
// Route::get('kegiatanlab', 'LaboratoriumController@kegiatanlab');
Route::get('deskripsi-laboratorium/{id}', 'LaboratoriumController@deskripsi_lab');


/******** HALAMAN PINJAM ********/
Route::get('lakukan-reservasi-laboratorium', 'PinjamController@lakukan_reservasi');
Route::post('lakukan-reservasi-laboratorium', 'PinjamController@save_lakukan_reservasi');
Route::get('lihat-jadwal-reservasi-laboratorium', 'PinjamController@lihat_jadwal_reservasi');
Route::get('lihat-semua-jadwal-reservasi-laboratorium', 'PinjamController@lihat_semua_jadwal_reservasi');
Route::get('accept-peminjaman-laboratorium/{id}', 'PinjamController@accept_peminjaman_laboratorium');
Route::get('decline-peminjaman-laboratorium/{id}', 'PinjamController@decline_peminjaman_laboratorium');

/******** HALAMAN KEGIATAN *******/
Route::get('lihat-kegiatan', 'KegiatanController@lihat_kegiatan');
Route::get('input-kegiatan', 'KegiatanController@input_kegiatan');
Route::post('input-kegiatan', 'KegiatanController@save_input_kegiatan');



/******** HALAMAN UNTUK MHS LBE *******/
//Menampilkan halaman untuk melihat tugas LBE
Route::get('lihattugas', 'MhsLBEController@lihattugas');
//Menampilkan halaman untuk submit progres tugas LBE
Route::get('submitprogres', 'MhsLBEController@submitprogres');
//Menampilkan halaman untuk melihat history submit progres tugas LBE
Route::get('histori', 'MhsLBEController@historiprogres');
//Menampilkan halaman untuk mendownload modul LBE
Route::get('modul', 'MhsLBEController@unduhmodul');


//nyampah
Route::get('nyobamaster', 'AdminController@nyobamaster');


Auth::routes();
