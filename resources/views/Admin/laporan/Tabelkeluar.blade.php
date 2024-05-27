@extends('home')



@section('content')

    <div class="content">
        <h2 class="text-center">Laporan Barang Keluar</h2>

        <div class="card-body">

            <a href="{{ url('cetak-keluar') }}" class="btn btn-sm btn-success" style="margin-bottom:20px;float:right;font-size:11px" target="_blank">
                Cetak
            </a>

            <table class="table table-bordered shadow-lg">

                <tr class="text-center" style="font-size: 13px">

                    <th>No</th>

                    <th>Nama User</th>

                    <th>Nama Barang</th>

                    <th>Jumlah Barang Keluar</th>

                    <th>Tujuan</th>

                    <th>Status</th>

                </tr>

                @foreach ($data as $item)

                    <tr class="text-center" style="font-size:13px; font-weight:600">

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->nama_User }}</td>

                        <td>{{ $item->nama_barang }}</td>

                        <td>{{ $item->barang_keluar }}</td>

                        <td>{{ $item->barang_tujuan }}</td>

                        <td>{{ $item->status }}</td>

                    </tr>

                @endforeach

            </table>

        </div>

    </div>

@endsection

