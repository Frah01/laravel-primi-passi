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

Route::get('about-us', function () {

    $data = [
        'name' => 'Francesco',
        'surname' => 'Vina',
        'age' => '21'
    ];

    return view('about_me', $data);
})->name('about-me');


Route::get('about-me-2', function () {

    $data = [
        'country' => 'Rome',
        'date' => '13/06/2001'
    ];
    return view('about_me_2', $data);
})->name('about-me-2');
