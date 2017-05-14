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


Route::get('inputdeskripsi', 'AdminController@input_deskripsi');
Route::post('inputdeskripsi', 'AdminController@inputdesc');
Route::get('inputfasil', 'FasilController@input_fasil');
Route::post('inputfasil', 'FasilController@inputfasil');
Route::get('listfasil', 'FasilController@list_fasil');



//Menampilkan halaman melihat data user lain
Route::get('lihatuser', 'AdminController@lihatuser');
Route::get('detailuser', 'AdminController@detailuser');




/******** HALAMAN ADMIN *******/
Route::get('inputadmin', 'AdminController@input_admin');
Route::get('listadmin', 'AdminController@list_admin');
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
Route::get('detail_dosen/{id}', 'DosenController@detail_dosen');
Route::get('edit_dosen/{id}', 'DosenController@edit_dosen');
Route::post('edit_dosen/{id}', 'DosenController@update_dosen');


/******** HALAMAN USER *******/
Route::get('list_user', 'UserController@list_user');
//Menampilkan halaman untuk mengubah profil diri
Route::get('profil', 'AdminController@profil');


/******** HALAMAN LABORATORIUM *******/
Route::get('list-laboratorium', 'LaboratoriumController@list_laboratorium');
Route::get('pengaturan-laboratorium/{id}', 'LaboratoriumController@pengaturan_laboratorium');
Route::post('pengaturan-laboratorium/{id}', 'LaboratoriumController@save_pengaturan_laboratorium');
Route::get('tambahkan-dosen-laboratorium', 'LaboratoriumController@tambahkan_dosen_laboratorium');
Route::post('tambahkan-dosen-laboratorium', 'LaboratoriumController@save_tambahkan_dosen_laboratorium');
// Route::get('kegiatanlab', 'LaboratoriumController@kegiatanlab');
Route::get('deskripsi-lab', 'LaboratoriumController@deskripsi_lab');


/******** HALAMAN PINJAM ********/
Route::get('lakukan-reservasi-laboratorium', 'PinjamController@lakukan_reservasi');
Route::post('lakukan-reservasi-laboratorium', 'PinjamController@save_lakukan_reservasi');
Route::get('lihat-jadwal-reservasi-laboratorium', 'PinjamController@lihat_jadwal_reservasi');
Route::get('lihat-semua-jadwal-reservasi-laboratorium', 'PinjamController@lihat_semua_jadwal_reservasi');
Route::get('accept-peminjaman-laboratorium/{id}', 'PinjamController@accept_peminjaman_laboratorium');
Route::get('decline-peminjaman-laboratorium/{id}', 'PinjamController@decline_peminjaman_laboratorium');
// Route::get('pinjam', 'PinjamController@index');
// Route::post('pinjam', 'PinjamController@lakukan_reservasi');
// Route::get('lihat_jadwal','PinjamController@lihat_jadwal');
// Route::get('lihatjadwal','PinjamController@Melihat_jadwal_lab');
// Route::get('verifpeminjaman', 'PinjamController@verif_pinjam');
// Route::get('listpeminjaman', 'PinjamController@list_pinjam');


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

