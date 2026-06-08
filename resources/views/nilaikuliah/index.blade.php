@extends('nilaikuliah.template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

<div class="mt-3">
    <a href="/nilaikuliah/create" class="btn btn-primary mb-3">+ Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>{{ $row->NilaiHuruf }}</td>
                <td>{{ $row->Bobot }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

