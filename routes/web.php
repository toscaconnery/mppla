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

// Route::get('/', function () {
//     return view('timer.index');
// });


// Route::get('home', function ()  {
//     return view('timer.index');
// });

Route::get('/', 'HomeController@show_home');
Route::get('home', 'HomeController@show_home');

//Halaman Deskripsi masing2 lab
Route::get('deskripsi-lab', 'UmumController@deskripsilab');
Route::get('kegiatanlab', 'UmumController@kegiatanlab');
//Route::post('inputdeskripsi', 'AdminController@inputdesc');
// Route::get('inputfasil', 'FasilController@input_fasil');
// Route::post('inputfasil', 'FasilController@inputfasil');



//Menampilkan halaman melihat data user lain
Route::get('lihatuser', 'AdminController@lihatuser');
Route::get('detailuser', 'AdminController@detailuser');

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
Route::get('tambahkan-proyek-lbe', 'LBEController@tambahkan_proyek_lbe');
Route::post('tambahkan-proyek-lbe', 'LBEController@save_tambahkan_proyek_lbe');
Route::get('input-tugas-lbe', 'LBEController@input_tugas_lbe');
Route::post('input-tugas-lbe', 'LBEController@save_input_tugas_lbe');
Route::get('lihat-tugas-lbe', 'LBEController@lihat_tugas_lbe');
Route::get('tambahkan-mahasiswa-lbe', 'MhsLBEController@tambahkan_mahasiswa_lbe');
Route::post('tambahkan-mahasiswa-lbe', 'MhsLBEController@save_tambahkan_mahasiswa_lbe');
Route::get('kumpulkan-tugas-lbe/{id}', 'LBEController@kumpulkan_tugas');
Route::post('kumpulkan-tugas-lbe/{id}', 'LBEController@save_kumpulkan_tugas');
Route::get('lihat-progress-lbe','LBEController@lihat_progress_tugas_lbe');
Route::get('download-jawaban-tugas-lbe/{id}', 'LBEController@download_jawaban_tugas_lbe');
Route::get('input-modul-lbe', 'ModulController@input_modul_lbe');
Route::post('input-modul-lbe', 'ModulController@save_input_modul_lbe');
Route::get('list-modul', 'ModulController@list_modul_lbe');
Route::get('download-modul-lbe/{id}','ModulController@download_modul_lbe');

// Route::get('listtugas', 'LBEController@listtugas');
// Route::get('inputtugas', 'LBEController@inputtugas');
// Route::post('inputtugas', 'LBEController@input_tugas');
// Route::get('downloadprogres', 'LBEController@downloadprogres');
// Route::get('inputmodul', 'ModulController@inputmodul');

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
Route::get('lihat-kegiatan/{id}', 'KegiatanController@lihat_kegiatan_selected');



/******** HALAMAN UNTUK MHS LBE *******/
Route::get('jadikan-mahasiswa-lbe/{id}', 'MhsLBEController@jadikan_mahasiswa_lbe');
Route::get('lihattugas', 'MhsLBEController@lihattugas');
Route::get('submitprogres', 'MhsLBEController@submitprogres');
Route::get('histori', 'MhsLBEController@historiprogres');
Route::get('modul', 'MhsLBEController@unduhmodul');
Route::get('inputtugas','LBEController@input_tugas');

//testing
Route::get('nyobamaster', 'AdminController@nyobamaster');


Auth::routes();

Route::get('logout', function() {
	Auth::logout();
	return view('timer.index');
});
