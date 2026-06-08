<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $data = DB::table('nilaikuliah')->get();

        foreach ($data as $row) {
            $na = $row->NilaiAngka;

            if ($na <= 40) {
                $row->NilaiHuruf = 'D';
            } elseif ($na <= 60) {
                $row->NilaiHuruf = 'C';
            } elseif ($na <= 80) {
                $row->NilaiHuruf = 'B';
            } else {
                $row->NilaiHuruf = 'A';
            }

            $row->Bobot = $na * $row->SKS;
        }

        return view('nilaikuliah.index', compact('data'));
    }

    public function create()
    {
        return view('nilaikuliah.tambah_data');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        return redirect('/nilaikuliah');
    }
}


