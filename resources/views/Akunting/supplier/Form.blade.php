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
                <div class="form-group">
                    <input type="text" id="nama_supplier" name="nama_supplier" class="form-control @error('nama_supplier') is-invalid @enderror"
                        placeholder="nama supplier" required autofocus value="{{ (@$data) ? @$data->nama_supplier : old('nama_supplier') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="alamat_supplier" name="alamat_supplier"
                        class="form-control @error('alamat_supplier') is-invalid @enderror" placeholder="alamat supplier" required
                        autofocus value="{{ (@$data) ? @$data->alamat_supplier : old('alamat_supplier') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="no_supplier" name="no_supplier"
                        class="form-control @error('no_supplier') is-invalid @enderror" placeholder="no hp supplier" required
                        autofocus value="{{ (@$data) ? @$data->no_supplier : old('no_supplier') }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
