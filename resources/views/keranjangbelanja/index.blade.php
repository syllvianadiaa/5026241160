@extends('keranjangbelanja.template')
@section('title', 'Keranjang Belanja')
@section('konten')

<div class="mt-3">
    <a href="/keranjangbelanja/create" class="btn btn-primary mb-3">Beli</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>Rp {{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($row->Total, 0, ',', '.') }}</td>
                <td>
                    <form action="/keranjangbelanja/{{ $row->ID }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Batalkan pembelian ini?')">Batal</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
