@extends('template')

@section('title', 'Tambah Flashdisk')

@section('konten')
<div class="mt-4">
    <h4>Tambah Data Flashdisk</h4>
    <form action="/flashdisk/store" method="POST">
        @csrf
        <div class="mb-3">
            <label>Merk Flashdisk</label>
            <input type="text" name="merkflashdisk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stockflashdisk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tersedia</label>
            <select name="tersedia" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Y">Y - Tersedia</option>
                <option value="N">N - Tidak Tersedia</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/flashdisk" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
