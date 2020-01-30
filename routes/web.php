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
    .'Laravel, emang mantap.';

});

Route::get('profil/{nama}/{alamat}/{umur}',function($a,$b,$c)
{
    return 'nama saya '.$a.
            '<br> alamat saya di '.$b.
            '<br> dan umur saya '.$c.' tahun';


});

Route::get('name/{param?}', function($a="konedy")
{
    return 'your name is '.$a;
});

Route::get('pesan/{a?}/{b?}/{c?}', function($a=null,$b=null,$c)
{
    if(isset ($a)){
        $a="Anda Memesan $a";
        echo $a;
    }
    if(isset ($b)){
        $b=" & $b";
        echo $b;
    }
    if(isset ($c)){
        $size=" dengan harga ".$c;
        echo $size;
        if($c < 0){
            echo "Maaf Harga Tidak Valid";
        }
        elseif($c >= 35000){
            echo "dan size large";
        }
        elseif($c >= 25000){
            echo "dan size medium";
        }
        elseif($c < 25000){
            echo " dan size small";
        }

    }
    if(!$a && !$b)
    return "Anda belum memesan sesuatu";
    

});

Route::get('tes-tni/{nama?}/{bb?}/{umur?}',function ($a=null,$b=null,$c=null)
{
    if(isset($a)){
        $a = "nama : ".$a;
        echo $a, '<br>';
    }
    if(isset($b)){
        $b = "berat badan : ".$b;
        echo $b, '<br>';
    }
    elseif($b <= 100){
        echo "maaf berat badan anda tidak valid";
    }
    elseif($b <= 75){
        echo "berat badan anda ideal";
    }
    elseif($b <= 64){
        echo "naikan berat badan anda";
    }
    elseif($b <= 50){
        echo "anda kurang nutrisi";
    }
    if(isset($c)){
        $c = "usia : ".$c;
        echo $usia, '<br>';
    }
    elseif($c <= 40){
        echo "jabatan anda sebagai pewira";
    }
});


Route::get('testmodel',function()
{
    $query = App\post::all();
    return $query;

});

Route::get('testmodel1',function()
{
    $query = App\post::find(1);
    return $query;
});

Route::get('testmodel2',function()
{
    $query = App\post::where('title','like','%cepat nikah%')->get();
    return $query;

});

Route::get('testmodel3',function()

{
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;

});

//akses model 

Route::get('toko',function()
{
    $data = App\toko::all()->take(3);
    return $query;
});

//akses melihat 1 record 3 field
Route::get('lihat/select',function()
{
    $query = App\toko::select('kategoriproduk','namaproduk',
    'jenisproduk','harga','jumlah','kualitas','alamat')->first();
});

Route::get('latihan','LatihanController@hallo');
Route::get('/data-1','LatihanController@loop');
Route::get('latihan','LatihanController@l');

//crud tabungan
Route::get('tabungan','TabunganController@index');
Route::get('tabungan/(id)','TabunganController@show');
Route::get('tabungan-tambah/id}/{/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
Route::get('tabungan-edit/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@update');
Route::get('tabungan-hapus/{id}','TabunganController@delete');

//crud customer
Route::get('customer','CustomerController@index');
Route::get('customer/{id}','CustomerController@show');
Route::get('customer-tambah/{code_customer}/{name}/{email}/{country}/{city}/{address}/{contact_number}','CustomerController@store');
Route::get('customer-edit/{id}/{code_customer}/{name}/{email}/{country}/{city}/{address}/{contact_number}','CustomerController@update');
Route::get('customer-hapus/{id}','CustomerController@delete');


//pasing data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('pass2','PracticeController@pass2');


