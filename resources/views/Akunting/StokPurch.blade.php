@extends('home')
<style>
    td {
        vertical-align: middle !important;
    }
</style>
@section('content')
    <div class="content">
        <div class="card-body">
            <table class="table table-bordered shadow-lg">
                <tr class="text-center" style="font-size: 13px">
                    <th>No</th>
                    <th>User Pemesanan</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Harga Per Barang</th>
                    <th>Supplier</th>
                    <th>Konfirmasi</th>
                </tr>
                @foreach ($ListPembelian as $item)
                    <form action="{{ url('done', $item->id) }}" method="post">
                        @csrf
                        <tr class="text-center" style="font-size:13px; font-weight:600">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->Nama_User }}</td>
                            <td>{{ $item->Nama_barang }}</td>
                            <td>{{ $item->Diambil }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>
                                @if (!$item->status)
                                    <a href="#" class="btn btn-sm"
                                        style="background-color: rgba(165, 42, 42, 0.308);color:black;font-size:12px;font-weight:500">Pending</a>
                                @else()
                                    <a href="#" class="btn btn-sm"
                                        style="background-color: rgba(33, 207, 6, 0.308);color:black;font-size:12px;font-weight:500">Confirmed</a>
                                @endif
                            </td>
                            <td>
                                <input type="number" id="harga_total" name="harga_total" class="form-control" placeholder="harga" required>
                            </td>
                            <td>
                                <select class="form-select" id="supplier" name="supplier" required>
                                    <option selected value="">Pilih Supplier</option>
                                    @foreach ($listSupplier as $item)
                                        <option value="{{ $item->kategori_supplier }}">
                                            {{ $item->kategori_supplier }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Field is required !
                                </div>
                            </td>
                            <td>
                                <input type="hidden" id="Diambil" name="Diambil" value="{{ $item->Diambil }}">
                                <input type="hidden" id="Nama_barang" name="Nama_barang" value="{{ $item->Nama_barang }}">
                                <button class="btn btn-success btn-sm " style="font-size: 12px">
                                    Ok
                                </button>
                            </td>
                        </tr>
                    </form>
                @endforeach
            </table>
        </div>
    </div>
@endsection
