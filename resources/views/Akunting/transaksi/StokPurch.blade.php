@extends('home')

<style>

    td {

        vertical-align: middle !important;

    }

    .bts {

        background-color: rgba(33, 207, 6, 0.308) !important;

        color:black !important;

        font-size:12px !important;

        font-weight:500 !important;

    }

</style>

@section('content')

    <div class="content">
        <h2 class="text-center">Data Pemesanan Barang</h2>

        <div class="card-body">

            <table class="table table-bordered shadow-lg">

                <tr class="text-center" style="font-size: 13px">

                    <th>No</th>

                    <th>User Pemesanan</th>

                    <th>Nama Barang</th>

                    <th>Jumlah Barang</th>

                    <th>Harga Per Barang</th>

                    <th>Harga Total</th>

                    <th>Supplier</th>

                    <th>Status</th>

                </tr>

                @foreach ($ListPembelian as $item)

                    <form action="{{ url('done', $item->id) }}" method="post">

                        @csrf

                        <tr class="text-center" style="font-size:13px; font-weight:600">

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->Nama_User }}</td>

                            <td>{{ $item->Nama_barang }}</td>

                            <td id="jml_{{ $item->id }}">{{ $item->Diambil }}</td>

                            @if ($item->status == "order")

                            <td><input onkeyup="hitung(this.value,{{ $item->id }})" type="number" id="harga_barang" name="harga_barang" class="form-control" placeholder="harga" required></td>

                            <td id="harga_total_{{ $item->id }}">0</td>

                            <td>

                                <select class="form-select" id="supplier" name="supplier" required>

                                    <option selected value="">Pilih Supplier</option>

                                    @foreach ($listSupplier as $val)

                                        <option value="{{ $val->id.'|'.$val->nama_supplier }}">

                                            {{ $val->nama_supplier }}

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

                                    Konfirmasi

                                </button>

                            </td>

                            @else()

                            <td>Rp.{{ number_format($item->harga_barang) }}</td>

                            <td>Rp.{{ number_format($item->harga_total) }}</td>

                            <td>{{ $item->nama_supplier }}</td>

                            <td><a href="#" class="btn btn-sm bts">Confirmed</a></td>

                            @endif 

                        </tr>

                    </form>

                @endforeach

            </table>

        </div>

    </div>

@endsection

@section('diagram')

    <script>

        function hitung(val,id){

            var jml = document.getElementById("jml_"+id).innerHTML;

            document.getElementById("harga_total_"+id).innerHTML = (parseInt(val)*parseInt(jml)) + (parseInt(val)*0.15);

        }

    </script>

@endsection

