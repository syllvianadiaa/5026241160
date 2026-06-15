@extends('flashdisk.template')
@section('title', 'Edit Flashdisk')
@section('konten')
<div class="mt-4">
    <h4>Edit Data Flashdisk</h4>
    <form action="/flashdisk/update" method="POST">
        @csrf
        <input type="hidden" name="kodeflashdisk" value="{{ $flashdisk->kodeflashdisk }}">
        <div class="mb-3">
            <label>Merk Flashdisk</label>
            <input type="text" name="merkflashdisk" class="form-control"
                   value="{{ $flashdisk->merkflashdisk }}" required>
        </div>
        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stockflashdisk" class="form-control"
                   value="{{ $flashdisk->stockflashdisk }}" required>
        </div>
        <div class="mb-3">
            <label>Tersedia</label>
            <select name="tersedia" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Y" {{ $flashdisk->tersedia == 'Y' ? 'selected' : '' }}>Y - Tersedia</option>
                <option value="N" {{ $flashdisk->tersedia == 'N' ? 'selected' : '' }}>N - Tidak Tersedia</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/flashdisk" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
