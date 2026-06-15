<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    public function index()
    {
        $data = DB::table('nilai_peserta')->get();
        foreach ($data as $item) {
            $rata = ($item->nilaiteori + $item->nilaipraktek) / 2;
            $item->rata_rata = $rata;
            $item->status = $rata >= 75 ? 'Lulus' : 'Tidak Lulus';
        }
        return view('eas.index', ['eas' => $data]);
    }

    public function create()
    {
        return view('eas.tambah');
    }

        public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        return redirect('/eas');
    }

    public function edit($id)
    {
        $data = DB::table('nilai_peserta')->where('id  ', $id)->first();
        return view('eas.edit', ['eas' => $data]);
    }

    public function update(Request $request)
    {
        DB::table('nilai_peserta')->where('id  ', $request->id)->update([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);
        return redirect('/eas');
    }

    public function hapus($id)
    {
        DB::table('nilai_peserta')->where('id  ', $id)->delete();
        return redirect('/eas');
    }
}
