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
    return view('home');
});

Route::get('/prodotti', function () {

    $pasta = config('paste');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($pasta as $formato) {
        if ($formato['tipo'] == 'lunga') {
            $lunghe[] = $formato;
        } else if ($formato['tipo'] == 'corta') {
            $corte[] = $formato;
        } else {
            $cortissime[] = $formato;
        }
    }

    //$data = ['paste' => $pasta];

    $data = ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime];

    return view('prodotti', $data);

});

Route::get('/news', function () {
    return view('news');
});

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});
