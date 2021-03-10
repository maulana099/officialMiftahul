<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// swit


// -----------admin
Route::get('/login','AdminController@login')->name('login');
Route::post('/loginpost','AdminController@loginPost');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/logout','AdminController@logout');
	Route::get('/admin-miftahul','DataController@index');

	Route::get('/data-message','DataController@message');
	Route::get('/data-message/hapus/{id}','DataController@hapus_message');

	Route::get('/data-dokumentasi','GambarController@dokumentasi');
	Route::post('/add-dokumentasi/simpan','GambarController@add_dokumentasi');
	Route::get('/dokumentasi/edit/{id}','GambarController@edit_dok');
	Route::post('/dokumentasi/update/{id}','GambarController@update_dok');
	Route::get('/dokumentasi/hapus/{id}','GambarController@hapus_dok');

	Route::get('/gambar','GambarController@gambar');
	Route::post('/add-gambar/simpan','GambarController@add_gambar');
	Route::get('/gambar/edit/{id}','GambarController@edit_gambar');
	Route::post('/gambar/update/{id}','GambarController@update_gambar');

	Route::get('/data-santri','DataController@santri');
	Route::get('/tambah/data-santri','DataController@tambah_santri');
	Route::post('/add/data-santri','DataController@add_santri');
	Route::get('/edit/data-santri/{id}','DataController@edit_santri');
	Route::post('/update/data-santri/{id}','DataController@update_santri');
	Route::get('/hapus/data-santri/{id}','DataController@hapus_santri');

	Route::get('/data-pendaftaran','DataController@daftar');
	Route::get('/add-pendaftaran','DataController@add_daftar');
	Route::post('/add-pendaftaran/simpan','DataController@add_pendaftaran');
	Route::get('/data-pendaftaran/edit/{id}','DataController@edit_daftar');
	Route::post('/data-pendaftaran/update/{id}','DataController@update_daftar');
	Route::get('/data-pendaftaran/hapus/{id}','DataController@hapus_daftar');
	Route::get('/data-pendaftaran/view/{id}','DataController@view_daftar');

	Route::get('/berita-acara','GambarController@berita');
	Route::get('/add/berita-acara','GambarController@add_berita');
	Route::post('/add-berita/simpan','GambarController@tambah_berita');
	Route::get('/edit/berita-acara/{id}','GambarController@edit_berita');
	Route::post('/update/berita-acara/{id}','GambarController@update_berita');
	Route::get('/hapus/berita-acara/{id}','GambarController@hapus_berita');

	Route::post('/data-pendaftaran/update/status/{id}','DataController@update_status');
});
// -----------user
// Route::get('/','DashboardController@dashboard');
// Route::get('/tentang-kami','DashboardController@tentang');
// Route::get('/visi-misi','DashboardController@visi_misi');
// Route::get('/pendaftaran','DashboardController@pendaftaran');
// Route::post('/formulir/pendaftaran/','DashboardController@post_daftar');
// Route::get('/details/berita/{id}','DashboardController@berita');
// Route::post('/kirim/message','DashboardController@message');
// Route::get('/hasil/pendaftaran','DashboardController@hasil');

Route::get('/','DashboardController@dashboard');
Route::get('/tentang','DashboardController@tentang');
Route::get('/visi-misi','DashboardController@visi_misi');

Route::get('/psb','PsbController@index');
Route::get('/psb/biaya-pendidikan','PsbController@pembayaran');
Route::get('/psb/syarat','PsbController@syarat');
Route::get('/psb/alur-pendaftaran','PsbController@caraPendaftaran');

