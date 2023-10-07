<?php

use Illuminate\Support\Facades\Route;
use Illuminate\views;
use Illuminate\App\Http\webController;

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
Route::get('/bpbdjabar', function() {
    return view ('web_bpbd.index');
});
Route::get('/profil-penjabat', function() {
    return view ('web_bpbd.profilpenjabat');
});
Route::get('/visi-dan-misi', function() {
    return view ('web_bpbd.visimisi');
});
Route::get('/ppid', function() {
    return view ('web_bpbd.ppid');
});
Route::get('/permohonan-informasi', function() {
    return view ('web_bpbd.permohonan');
});
Route::get('/formulir-keberatan', function() {
    return view ('web_bpbd.formulir');
});
Route::get('/daftar-informasi', function() {
    return view ('web_bpbd.daftarinformasi');
});
Route::get('/informasi-wajib-berkala', function() {
    return view ('web_bpbd.informasiwajib');
});
Route::get('/informasi-tersedia-setiap-saat', function() {
    return view ('web_bpbd.informasitersedia');
});
Route::get('/informasi-serta-merta', function() {
    return view ('web_bpbd.informasisertamerta');
});
Route::get('/dokumen-informasi', function() {
    return view ('web_bpbd.dokumeninformasi');
});
Route::get('/indeks-kepuasan-masyarakat', function() {
    return view ('web_bpbd.indeks-kepuasan');
});
Route::get('/bpbd-kabkota-jawa-barat', function() {
    return view ('web_bpbd.bpbdkab');
});
Route::get('/berita-terkini', function() {
    return view ('web_bpbd.beritaterkini');
});
Route::get('/artikel', function() {
    return view ('web_bpbd.artikel');
});
Route::get('/konten-edukasi', function() {
    return view ('web_bpbd.kontenedukasi');
});
Route::get('/infografis', function() {
    return view ('web_bpbd.infografis');
});
Route::get('/infografis-bencana', function() {
    return view ('web_bpbd.infografisbencana');
});
Route::get('/analisis-dampak-bencana', function() {
    return view ('web_bpbd.analisis');
});
Route::get('/peta-krb', function() {
    return view ('web_bpbd.petakrb');
});

