<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    //
    public function index()
    {

    $tabungan = Tabungan::all();
    return $tabungan;
    }
    public function show($id)
    {
        $tabungan = Tabungan::find($id);
        return $tabungan;
    }
    public function store()
    {
        $tabungan = new Tabungan($nis,$nama,$kelas,$jml);
        $tabungan->nis = "10022";
        $tabungan->nama = "charles";
        $tabungan->kelas = "6";
        $tabungan->jml = "10000";
        $tabungan->save();
        return $tabungan;
    }
    public function update($id,$a,$b,$c,$d)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->nis=$a;
        $tabungan->nama=$b;
        $tabungan->kelas=$c;
        $tabungan->jml=$d;
        $tabungan->save();
        return $tabungan;
    }
    public function delet($id)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->delete();
        return $tabungan;
    }
}

