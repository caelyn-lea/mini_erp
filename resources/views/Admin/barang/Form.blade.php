@extends('home')

@section('content')
    <div class="content">
        <div class="card-body">
            <form action="{{ url($url) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(@$data)   

                    @method('PUT')        

                    <input type="hidden" name="id" value="{{ @$data->id }}">

                @endif
                <div class="form-group">
                    <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror"
                        placeholder="gambar" autofocus value="{{ (@$data) ? @$data->gambar : old('gambar') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="Nama_barang" name="Nama_barang"
                        class="form-control @error('Nama_barang') is-invalid @enderror" placeholder="Nama_barang" required
                        autofocus value="{{ (@$data) ? @$data->Nama_barang : old('Nama_barang') }}">
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Lokasi_penyimpanan</label>
                        <select class="form-select" id="Lokasi_penyimpanan" name="Lokasi_penyimpanan" required>
                            <option {{ (@$data->Lokasi_penyimpanan!="") ? "" : "selected" }} disabled value="">Pilih Kategori</option>
                            <option {{ (@$data->Lokasi_penyimpanan=="gudang_1") ? "selected" : "" }} value="gudang_1">gudang_1</option>
                            <option {{ (@$data->Lokasi_penyimpanan=="gudang_2") ? "selected" : "" }} value="gudang_2">gudang_2</option>
                        </select>
                        <div class="invalid-feedback">
                            Field is required !
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
