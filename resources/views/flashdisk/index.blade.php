@extends('flashdisk.template')
@section('title', 'Data Flashdisk')
@section('konten')

<div class="mt-4">
    <a href="/flashdisk/tambah" class="btn btn-primary mb-3">+ Tambah Flashdisk</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Kode</th>
                <th>Merk Flashdisk</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flashdisks as $f)
            <tr>
                <td>{{ $f->kodeflashdisk }}</td>
                <td>{{ $f->merkflashdisk }}</td>
                <td>{{ $f->stockflashdisk }}</td>
                <td>{{ $f->tersedia }}</td>
                <td>
                    <a href="/flashdisk/edit/{{ $f->kodeflashdisk }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/flashdisk/hapus/{{ $f->kodeflashdisk }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
