@extends('nilaikuliah.template')
@section('title', 'Beli Barang')
@section('konten')

<div class="mt-3">
    <form action="/keranjangbelanja" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" placeholder="Masukkan Kode Barang">
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="text" name="Jumlah" class="form-control" placeholder="Masukkan Jumlah">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga per Item</label>
            <input type="text" name="Harga" class="form-control" placeholder="Masukkan Harga">
        </div>
        <button type="submit" class="btn btn-primary">Beli</button>
        <a href="/keranjangbelanja" class="btn btn-secondary">Batal</a>
    </form>
</div>

@endsection
