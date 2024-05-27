@extends('home')



@section('content')

    <div class="content">
        <h2 class="text-center">Data Pesanan Barang Masuk</h2>
        <div class="card-body">
            <table class="table table-bordered shadow-lg">
                <tr class="text-center" style="font-size: 13px">
                    <th>No</th>

                    <th>Nama Barang</th>

                    <th>Jumlah Barang</th>

                    <th>Kategori</th>

                    <th>Supplier</th>

                    <th>Total Harga</th>

                    <th>Status</th>
                </tr>
                @foreach ($keranjang as $item)
                    <tr class="text-center" style="font-size:13px; font-weight:600">
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->Nama_barang }}</td>

                        <td>{{ $item->Diambil }}</td>

                        <td>{{ $item->kategori }}</td>
                        
                        <td>{{ $item->nama_supplier }}</td>

                        <td>Rp.{{ number_format($item->harga_total) }}</td>

                        <td class="text-center">

                            @if ($item->status == "order")

                                <p>pending</p>

                            @else()

                                <a href="{{ url('enter', $item->id) }}" class="btn btn-success">Masukkan Barang</a>

                            @endif

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection

