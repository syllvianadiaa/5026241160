@extends('eas.template')
@section('title', 'Kode Soal Nilai_Peserta')
@section('konten')
<div class="mt-4">
    <a href="/eas/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktik</th>
                <th>Rata-rata</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eas as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nopeserta }}</td>
                <td>{{ $e->nilaiteori }}</td>
                <td>{{ $e->nilaipraktek }}</td>
                <td>{{ $e->rata_rata }}</td>
                <td>{{ $e->status }}</td>
                <td>
                    <a href="/eas/edit/{{ $e->id }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/eas/hapus/{{ $e->id   }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
