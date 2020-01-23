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

Route::get('halo', function () 
{
    return 'Halo Ini Aplikasi Laravel Pertama Saya'.
            '<br>Laravel is Magical Framework';
});


Route::get('about',function()
{
    return '<h1>Hallo</h1>'
    .'Selamat Datang Di Web Saya<br>'
    .'Laravel, emang keren.';

});

Route::get('profil/{nama}/{alamat}/{umur}',function($a,$b,$c)
{
    return 'nama saya '.$a.
            '<br> alamat aya di '.$b.
            '<br> dan umur saya '.$c.' tahun';


});