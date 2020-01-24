<?php

use Illuminate\Database\Seeder;

class PostsTablebio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

     */
    public function run()
    {
        $bio = [
            ['kategoriproduk'=>'pakaian','namaproduk'=>'baju',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'2',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'celana',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'3',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'kaos',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'4',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'daster',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'2',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'kameja',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'5',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'rok',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'6',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'celana',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'9',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'baju',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'4',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'baju',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'8',
            'kualitas'=>'standar','alamat'=>'cilebak'],
            ['kategoriproduk'=>'pakaian','namaproduk'=>'baju',
            'jenisproduk'=>'kain','harga'=>'50000','jumlah'=>'9',
            'kualitas'=>'standar','alamat'=>'cilebak']
        ];

        //masukan ke database
        DB::table('tbl_toko')->insert($bio);
    }
}
