<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class PracticeController extends Controller
{
    //
    public function pass()
    {
        $data = "Reza Okto Maniani";
        return view('latihan',compact('data'));
    }
    public function pass1()
    {
        $siswa = [
            ['nama'=>'kasman','kelas'=>'RPL 1'],
            ['nama'=>'kasman','kelas'=>'RPL 2'],

        ];
        return view('latihan1',['data'=>$siswa]);
    }
    public function pass2()
    {
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2',compact('tabungan'));
    }
}
