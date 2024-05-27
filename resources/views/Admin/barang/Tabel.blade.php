@extends('home')

@section('content')
    <div class="content">
        <h2 class="text-center">Katalog Barang</h2>
        <div class="card-body">
            <a href="{{ url('/barang/create') }}" class="btn btn-sm btn-success" style="margin-bottom:20px;margin-left: 5px;float:right;font-size:11px">Tambah Barang Baru</a>
            <table class="table table-bordered shadow-lg">
                <tr class="text-center" style="font-size: 13px">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Lokasi Penyimpanan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($dataInvent as $item)
                    <tr class="text-center" style="font-size:13px; font-weight:600">
                        <td>{{ $loop->iteration }}</td> 
                        <td><img src="{{ asset('storage/' . $item->gambar) }}" width="65" height="65"></td>
                        <td>{{ $item->Nama_barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp {{ number_format($item->harga_satuan) }}</td>
                        <td>{{ $item->Lokasi_penyimpanan }}</td>
                        <td>
                            <button class="btn btn-sm"
                                style="background-color: rgba(165, 42, 42, 0.308);color:black;font-size:12px;font-weight:500">Created
                                At :
                                {{ $item->created_at }}</button>
                            <button class="btn btn-sm"
                                style="background-color: wheat;color:black;font-size:12px;font-weight:500">Updated At :
                                {{ $item->updated_at }}</button>
                        </td>
                        <td style="width: 170px">
                            <a href="{{ url('checkout', $item->id) }}" class="btn btn-sm"
                                style="background-color: yellow;color:black;font-weight:600;font-size:10px">PESAN</a>
                            <a href="{{ url('/barang/'.$item->id.'/edit') }}" class="btn btn-sm"
                                style="background-color: green;color:white;font-weight:400;font-size:10px">EDIT</a>
                            <a href="{{ url('/barang/delete/'.$item->id) }}" onclick="javascript:return confirm('Apa anda yakin?')" class="btn btn-sm"
                                style="background-color: red; color:white;font-weight:6 00;font-size:10px">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
