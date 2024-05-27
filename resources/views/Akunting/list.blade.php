@extends('home')
@section('content')
    <div class="wrapper" style="padding: 20px">
        <h2 class="text-center">Katalog Barang</h2>
        <div class="row" style="margin-top: 30px;">
            @foreach ($databarang as $item)
                <div class="col-lg-4 col-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" style="padding: 10px">
                        <div class="card-body">
                            <p class="card-title" style="font-weight: 700"> {{ $item->Nama_barang }}</p>
                            <p class="card-text">Stok : {{ $item->jumlah }}</p>
                            <a href="{{ url('checkout', $item->id) }}" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
 