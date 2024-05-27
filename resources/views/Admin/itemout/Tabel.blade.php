@extends('home')



@section('content')

    <div class="content">
        <h2 class="text-center">Data Permintaan Barang Keluar</h2>

        <div class="card-body">

            <a href="{{ url('/itemout/create') }}" class="btn btn-sm btn-success" style="margin-bottom:20px;float:right;font-size:11px">Add

                Data</a>

            <table class="table table-bordered shadow-lg">

                <tr class="text-center" style="font-size: 13px">

                    <th>No</th>

                    <th>Nama User</th>

                    <th>Nama Barang</th>

                    <th>Jumlah Barang Keluar</th>

                    <th>Tujuan</th>

                    <th>Status</th>

                    <th>Aksi</th>

                </tr>

                @foreach ($data as $item)

                    <tr class="text-center" style="font-size:13px; font-weight:600">

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->nama_User }}</td>

                        <td>{{ $item->nama_barang }}</td>

                        <td>{{ $item->barang_keluar }}</td>

                        <td>{{ $item->barang_tujuan }}</td>

                        <td>{{ $item->status }}</td>

                        <td>
                            <a href="{{ url('/itemout/'.$item->id) }}" class="btn btn-sm" style="background-color: yellow;color:black;font-weight:600;font-size:10px">CONFIRM</a>

                            <a href="{{ url('/itemout/'.$item->id.'/edit') }}" class="btn btn-sm" style="background-color: green;color:white;font-weight:400;font-size:10px">EDIT</a>

                            <a href="{{ url('/itemout/delete/'.$item->id) }}" onclick="javascript:return confirm('Apa anda yakin?')" class="btn btn-sm" style="background-color: red; color:white;font-weight:6 00;font-size:10px">DELETE</a>

                        </td>

                    </tr>

                @endforeach

            </table>

        </div>

    </div>

@endsection

