<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\albumController;
use App\Http\Controllers\artistController;
use App\Http\Controllers\chartController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\labelController;
use App\Http\Controllers\licenseController;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\producerController;
use App\Http\Controllers\songsController;
use App\Http\Controllers\studioController;

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

Route::get('/',[dashboardController::class,'index'])
    ->name('dashboard');
route::get('album',[albumController::class,'index'])
    ->name('album');
route::get('album/tambah',[albumController::class,'tampilTambah'])
    ->name('tambahAlbum');
route::post('album/tambahData',[albumController::class,'submitTambahData'])
    ->name('tambahDataAlbum');
route::get('album/edit/{id}',[albumController::class,'edit']);
route::post('album/update/{id}',[albumController::class,'submitDataEdit']);
route::get('album/delete/{id}',[albumController::class,'deleteData']);
route::get('album/detail/{id}',[albumController::class,'detail']);


route::get('artist',[artistController::class,'index'])
    ->name('artist');
route::get('artist/tambah',[artistController::class,'tampilTambah'])
    ->name('tambahArtist');
route::post('artist/tambah',[artistController::class,'submitTambahData'])
    ->name('tambahDataArtist');
route::get('artist/edit/{id}',[artistController::class,'edit']);
route::post('artist/update/{id}',[artistController::class,'submitDataEdit']);
route::get('artist/delete/{id}',[artistController::class,'deleteData']);
route::get('artist/detail/{id}',[artistController::class,'detail']);


route::get('chart',[chartController::class,'index'])
    ->name('chart');
route::get('chart/tambah',[chartController::class,'tampilTambah'])
    ->name('tambahChart');
route::post('chart/tambah',[chartController::class,'submitTambahData'])
    ->name('tambahDataChart');
route::get('chart/edit/{id}',[chartController::class,'edit']);
route::post('chart/update/{id}',[chartController::class,'submitDataEdit']);
route::get('chart/delete/{id}',[chartController::class,'deleteData']);
route::get('chart/detail/{id}',[chartController::class,'detail']);


route::get('genre',[genreController::class,'index'])
    ->name('genre');
route::get('genre/tambah',[genreController::class,'tampilTambah'])
    ->name('tambahGenre');
route::post('genre/tambah',[genreController::class,'submitTambahData'])
    ->name('tambahDataGenre');
route::get('genre/edit/{id}',[genreController::class,'edit']);
route::post('genre/update/{id}',[genreController::class,'submitDataEdit']);
route::get('genre/delete/{id}',[genreController::class,'deleteData']);
route::get('genre/detail/{id}',[genreController::class,'detail']);


route::get('label',[labelController::class,'index'])
    ->name('label');
route::get('label/tambah',[labelController::class,'tampilTambah'])
    ->name('tambahLabel');
route::post('label/tambah',[labelController::class,'submitTambahData'])
    ->name('tambahDataLabel');
route::get('label/edit/{id}',[labelController::class,'edit']);
route::post('label/update/{id}',[labelController::class,'submitDataEdit']);
route::get('label/delete/{id}',[labelController::class,'deleteData']);
route::get('label/detail/{id}',[labelController::class,'detail']);

route::get('license',[licenseController::class,'index'])
    ->name('license');
route::get('license/tambah',[licenseController::class,'tampilTambah'])
    ->name('tambahLicense');
route::post('license/tambah',[licenseController::class,'submitTambahData'])
    ->name('tambahDataLicense');
route::get('license/edit/{id}',[licenseController::class,'edit']);
route::post('license/update/{id}',[licenseController::class,'submitDataEdit']);
route::get('license/delete/{id}',[licenseController::class,'deleteData']);
route::get('license/detail/{id}',[licenseController::class,'detail']);


route::get('publisher',[publisherController::class,'index'])
    ->name('publisher');
route::get('publisher/tambah',[publisherController::class,'tampilTambah'])
    ->name('tambahPublisher');
route::post('publisher/tambah',[publisherController::class,'submitTambahData'])
    ->name('tambahDataPublisher');
route::get('publisher/edit/{id}',[publisherController::class,'edit']);
route::post('publisher/update/{id}',[publisherController::class,'submitDataEdit']);
route::get('publisher/delete/{id}',[publisherController::class,'deleteData']);
route::get('publisher/detail/{id}',[publisherController::class,'detail']);


route::get('producer',[producerController::class,'index'])
    ->name('producer');
route::get('producer/tambah',[producerController::class,'tampilTambah'])
    ->name('tambahProducer');
route::post('producer/tambah',[producerController::class,'submitTambahData'])
    ->name('tambahDataProducer');
route::get('producer/edit/{id}',[producerController::class,'edit']);
route::post('producer/update/{id}',[producerController::class,'submitDataEdit']);
route::get('producer/delete/{id}',[producerController::class,'deleteData']);
route::get('producer/detail/{id}',[producerController::class,'detail']);


route::get('songs',[songsController::class,'index'])
    ->name('songs');
route::get('songs/tambah',[songsController::class,'tampilTambah'])
    ->name('tambahSongs');
route::post('songs/tambah',[songsController::class,'submitTambahData'])
    ->name('tambahDataSongs');
route::get('songs/edit/{id}',[songsController::class,'edit']);
route::post('songs/update/{id}',[songsController::class,'submitDataEdit']);
route::get('songs/delete/{id}',[songsController::class,'deleteData']);
route::get('songs/detail/{id}',[songsController::class,'detail']);


route::get('studio',[studioController::class,'index'])
    ->name('studio');
route::get('studio/tambah',[studioController::class,'tampilTambah'])
    ->name('tambahStudio');
route::post('studio/tambah',[studioController::class,'submitTambahData'])
    ->name('tambahDataStudio');
route::get('studio/edit/{id}',[studioController::class,'edit']);
route::post('studio/update/{id}',[studioController::class,'submitDataEdit']);
route::get('studio/delete/{id}',[studioController::class,'deleteData']);
route::get('studio/detail/{id}',[studioController::class,'detail']);