<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Siswa = [
            ['nama'=>'angga','nis'=>'123','jenis_kelamin'=>'laki laki','alamat'=>'bandung','tgl_lahir'=>'2000-08-27','umur'=>'19'],
            ['nama'=>'angga','nis'=>'1234','jenis_kelamin'=>'laki laki','alamat'=>'bandung','tgl_lahir'=>'2000-08-27','umur'=>'19'],
            ['nama'=>'angga','nis'=>'1235','jenis_kelamin'=>'laki laki','alamat'=>'bandung','tgl_lahir'=>'2000-08-27','umur'=>'19'],
            ['nama'=>'angga','nis'=>'1236','jenis_kelamin'=>'laki laki','alamat'=>'bandung','tgl_lahir'=>'2000-08-27','umur'=>'19'],
            ['nama'=>'angga','nis'=>'1237','jenis_kelamin'=>'laki laki','alamat'=>'bandung','tgl_lahir'=>'2000-08-27','umur'=>'19'],



        ];
        DB::table('siswa')->insert($Siswa);

        //
    }
}
