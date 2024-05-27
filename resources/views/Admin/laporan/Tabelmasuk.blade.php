@extends('home')



@section('content')

    <div class="content">
        <h2 class="text-center">Laporan Barang Masuk</h2>

        <div class="card-body">

            <a href="{{ url('cetak-masuk') }}" class="btn btn-sm btn-success" style="margin-bottom:20px;float:right;font-size:11px" target="_blank">
                Cetak
            </a>

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

                @foreach ($data as $item)

                    <tr class="text-center" style="font-size:13px; font-weight:600">

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->Nama_barang }}</td>

                        <td>{{ $item->Diambil }}</td>

                        <td>{{ $item->kategori }}</td>
                        
                        <td>{{ $item->nama_supplier }}</td>

                        <td>Rp.{{ number_format($item->harga_total) }}</td>

                        <td>{{ $item->status }}</td>

                    </tr>

                @endforeach

            </table>

        </div>

    </div>

@endsection

