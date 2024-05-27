@extends('home')

@section('content')
    <div class="content">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Foto</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang Dipesan</th>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $databarang['gambar']) }}" style="max-height: 140px;">
                    </td>
                    <td>{{ $databarang['Nama_barang'] }}</td>
                    <td>
                        <form action="{{ url('cetak-resi', $databarang->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf {{-- -> fitur keamanan dari laravel --}}
                            <div class="form-group">
                                <input type="text" id="jumlah" name="jumlah"
                                    class="form-control @error('jumlah') is-invalid @enderror"
                                    placeholder="Jumlah Barang" required autofocus value="{{ old('jumlah') }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-group-sm">Pesan</button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
