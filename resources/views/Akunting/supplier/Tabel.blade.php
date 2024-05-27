@extends('home')

@section('content')
    <div class="content">
        <h2 class="text-center">Data Supplier</h2>
        <div class="card-body">
            <a href="{{ url('/supplier/create') }}" class="btn btn-sm btn-success" style="margin-bottom:20px;float:right;font-size:11px">Tambah Supplier Baru</a>
            <table class="table table-bordered shadow-lg">
                <tr class="text-center" style="font-size: 13px">
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Action</th>

                </tr>
                @foreach ($supplier as $item)
                    <tr class="text-center" style="font-size:13px; font-weight:600">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_supplier }}</td>
                        <td>{{ $item->alamat_supplier }}</td>
                        <td>{{ $item->no_supplier }}</td>
                        <td>
                            <a href="{{ url('/supplier/'.$item->id.'/edit') }}" class="btn btn-sm"
                                style="background-color: green;color:white;font-weight:400;font-size:10px">EDIT</a>
                            <a href="{{ url('/supplier/delete/'.$item->id) }}" onclick="javascript:return confirm('Apa anda yakin?')" class="btn btn-sm"
                                style="background-color: red; color:white;font-weight:6 00;font-size:10px">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
