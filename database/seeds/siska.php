<?php

use Illuminate\Database\Seeder;

class siska extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['tittle'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
        ['tittle'=>'Haruskah Menunda Nikah?', 'content'=>'lorem ipsum'],
        ['tittle'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
        ];
        // masukkan data ke database
        DB::table('posts')->insert($posts);

        //
    }
}
