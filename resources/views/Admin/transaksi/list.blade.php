@extends('home')
@section('content')

    <div class="content">
        <h2 class="text-center">Data Inventory</h2>
        <div class="card-body">
            <a href="{{ url('/barang/cetak') }}" class="btn btn-sm btn-success" style="margin-bottom:20px;float:right;font-size:11px">Cetak</a>
            <table class="table table-bordered shadow-lg">
                <tr class="text-center" style="font-size: 13px">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Lokasi Penyimpanan</th>
                    <th>last_supplier</th>
                    <th>Status</th>
                </tr>
                @foreach ($databarang as $item)
                    <tr class="text-center" style="font-size:13px; font-weight:600">
                        <td>{{ $loop->iteration }}</td> 
                        <td><img src="{{ asset('storage/' . $item->gambar) }}" width="65" height="65"></td>
                        <td>{{ $item->Nama_barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp {{ number_format($item->harga_satuan) }}</td>
                        <td>{{ $item->Lokasi_penyimpanan }}</td>
                        <td>{{ $item->last_supplier }}</td>
                        <td>
                            <button class="btn btn-sm"
                                style="background-color: rgba(165, 42, 42, 0.308);color:black;font-size:12px;font-weight:500">Created
                                At :
                                {{ $item->created_at }}</button>
                            <button class="btn btn-sm"
                                style="background-color: wheat;color:black;font-size:12px;font-weight:500">Updated At :
                                {{ $item->updated_at }}</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
 