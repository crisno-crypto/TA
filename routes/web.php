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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/nilai_siswa', 'inputnilaiController@lihatnilai');
Route::get('/semua_nilai_mahasiswa/{id_k}/{id_mhs}', 'inputnilaiController@lihatnilaimahasiswa');
Route::get('nilai_siswa/cari','inputnilaiController@cari');
Route::get('/dashboard', 'HomeController@index');

Route::get('/mahasiswa','mahasiswaController@index');
Route::get('/mahasiswa/tambah','mahasiswaController@tambah');
Route::post('/mahasiswa/tambahdata','mahasiswaController@tambahdata');
Route::get('/mahasiswa/edit/{id}','mahasiswaController@edit');
Route::post('/mahasiswa/update','mahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}','mahasiswaController@hapus');

Route::get('/dosen','dosenController@index');
Route::get('/dosen/tambah','dosenController@tambah');
Route::post('/dosen/tambahdata','dosenController@tambahdata');
Route::get('/dosen/edit/{id}','dosenController@edit');
Route::post('/dosen/update','dosenController@update');
Route::get('/dosen/hapus/{id}','dosenController@hapus');


Route::get('/matakuliah','matakuliahController@index');
Route::get('/matakuliah/tambah','matakuliahController@tambah');
Route::post('/matakuliah/tambahdata','matakuliahController@tambahdata');
Route::get('/matakuliah/edit/{id}','matakuliahController@edit');
Route::post('/matakuliah/update','matakuliahController@update');
Route::get('/matakuliah/hapus/{id}','matakuliahController@hapus');

Route::get('/kelas','kelasController@index');
Route::get('/kelas/tambah','kelasController@tambah');
Route::post('/kelas/tambahdata','kelasController@tambahdata');
Route::get('/kelas/edit/{id}','kelasController@edit');
Route::post('/kelas/update','kelasController@update');
Route::get('/kelas/hapus/{id}','kelasController@hapus');

Route::get('/inputnilai','inputnilaiController@index');

Route::get('/inputnilai/pilihkelas/{id}','inputnilaiController@pilihkelas');

Route::get('/inputnilai/semuamahasiswa/{idk}/{idm}','inputnilaiController@semuamahasiswa');
Route::post('/inputnilai/tambahnilai','inputnilaiController@tambahnilai');

// Route::get('/coba', 'cobaController@show');
// Route::post('/cek', 'cobaController@show');