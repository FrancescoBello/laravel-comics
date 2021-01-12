<?php

use Illuminate\Support\Facades\Route;

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
  $comics = config("comics");
    $data=[
      "comicList" => $comics
    ];
    return view('home', $data);
})->name("homepage");


Route::get('/comic/{id}', function ($id) {
  $comics = config("comics");
  $fumetto = $comics[$id];
    $data=[
      "comic" => $fumetto
    ];
      return view('single-comic', $data);
})->name('comic-info');
