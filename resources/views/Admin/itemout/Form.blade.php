@extends('home')



@section('content')

    <div class="content">

        <div class="card-body">

            <form action="{{ url($url) }}" method="POST">

                @csrf

                @if(@$data)   

                    @method('PUT')        

                    <input type="hidden" name="id" value="{{ @$data->id }}">

                @endif

                <div class="col-md-12">

                    <div class="mb-3">

                        <label class="form-label">Barang</label>

                        <select class="form-select" id="barang" name="barang" onchange="hitung(this.value)" required>

                            <option selected disabled value="">Pilih Barang</option>

                            @foreach ($barang as $val)

                                <option value="{{ $val->id.'|'.$val->Nama_barang.'|'.$val->jumlah }}" {{ ($val->id == @$data->id_barang) ? 'selected' : '' }}>

                                    {{ $val->Nama_barang }}

                                </option>

                            @endforeach

                        </select>

                        <div class="invalid-feedback">

                            Field is required !

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <input type="number" id="barang_keluar" name="barang_keluar"

                        class="form-control @error('barang_keluar') is-invalid @enderror" placeholder="jumlah barang keluar" required

                        autofocus value="{{ (@$data) ? @$data->barang_keluar : old('barang_keluar') }}">

                </div>

                <div class="form-group">

                    <input type="text" id="barang_tujuan" name="barang_tujuan"

                        class="form-control @error('barang_tujuan') is-invalid @enderror" placeholder="barang tujuan" required

                        autofocus value="{{ (@$data) ? @$data->barang_tujuan : old('barang_tujuan') }}">

                </div>

                <div class="form-group">

                    <button class="btn btn-success btn-group-sm">Simpan</button>

                </div>

            </form>

        </div>

    </div>

@endsection


@section('diagram')

    <script>

        function hitung(val){

            row = val.split("|");

            document.getElementById("barang_keluar").max = row[2];
        }

    </script>

@endsection