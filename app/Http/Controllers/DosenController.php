<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
    return "<h1>Halo ini adalah method index,</h1> dalam controller DosenController. - <b>www.malasngoding.com</b>";
}
    public function biodata(){
        $nama = "Sylvia Nadia Maharani";
        $umur = 20 ;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata', ['nama' => $nama, 'umur' => $umur, 'matkul' => $pelajaran]);
    }
}
