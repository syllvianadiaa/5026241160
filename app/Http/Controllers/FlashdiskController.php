<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashdiskController extends Controller
{
    public function index()
    {
        $data = DB::table('flashdisk')->get();
        return view('flashdisk.index', ['flashdisks' => $data]);
    }

    public function create()
    {
        return view('flashdisk.create');
    }

    public function store(Request $request)
    {
        DB::table('flashdisk')->insert([
            'merkflashdisk'  => $request->merkflashdisk,
            'stockflashdisk' => $request->stockflashdisk,
            'tersedia'       => $request->tersedia,
        ]);
        return redirect('/flashdisk');
    }

    public function edit($id)
    {
        $data = DB::table('flashdisk')->where('kodeflashdisk', $id)->first();
        return view('flashdisk.edit', ['flashdisk' => $data]);
    }

    public function update(Request $request)
    {
        DB::table('flashdisk')->where('kodeflashdisk', $request->kodeflashdisk)->update([
            'merkflashdisk'  => $request->merkflashdisk,
            'stockflashdisk' => $request->stockflashdisk,
            'tersedia'       => $request->tersedia,
        ]);
        return redirect('/flashdisk');
    }

    public function hapus($id)
    {
        DB::table('flashdisk')->where('kodeflashdisk', $id)->delete();
        return redirect('/flashdisk');
    }
}
