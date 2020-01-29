<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function loop()
    {
        $data = [
            ['nama'=>'siska','kelas'=>'XI RPL 1','uang_jajan'=>10000],
            ['nama'=>'siska','kelas'=>'XI RPL 1','uang_jajan'=>50000],
            ['nama'=>'siska','kelas'=>'XI RPL 1','uang_jajan'=>60000],
            ['nama'=>'siska','kelas'=>'XI RPL 1','uang_jajan'=>70000],
            ['nama'=>'siska','kelas'=>'XI RPL 1','uang_jajan'=>80000],
        ];
        foreach($data as $val => $key){
            if($key['uang_jajan']>=50000){
                $tabungan = "25%";
                $tabung = $key['uang_jajan']*25/100;
                $sisa = $key['uang_jajan'] - $tabung;
            }
            elseif($key['uang_jajan']>=25000){
                $tabungan = "15%";
                $tabung = $key['uang_jajan']*15/100;
                $sisa = $key['uang_jajan'] - $tabung;
            }
            elseif($key['uang_jajan']>=10000){
                $tabungan = "10%";
                $tabung = $key['uang_jajan']*10/100;
                $sisa = $key['uang_jajan'] - $tabung;
            }
            else{
                $tabungan = "0%";
                $tabung = $key['uang_jajan']*0;
                $sisa = $key['uang_jajan'];
            }
            echo "nama : ".$key['nama'].
            "<br> kelas : ".$key['kelas'].
            "<br> uang jajan : ".$key['uang_jajan'].
            "<br> tabungan : ".$tabungan. '=>'.$tabungan.
            "<br> sisa uang : ".$sisa. '<hr>';
        }
    }
    public function latihan()
    {
        $data = [
            ['nama'=>'siska','agama'=>'islam','alamat'=>'cibaduyut','jk'=>'wanita',
            'jabatan'=>'Sekretaris','jam_kerja'=>7],
            ['nama'=>'suci','agama'=>'islam','alamat'=>'pasardesa','jk'=>'wanita',
            'jabatan'=>'Manager','jam_kerja'=>5],
            ['nama'=>'zamzam','agama'=>'islam','alamat'=>'situtarate','jk'=>'pria',
            'jabatan'=>'staff','jam_kerja'=>10],
            
        ];
        foreach($data as $val => $key){
            
        }
    }
}
