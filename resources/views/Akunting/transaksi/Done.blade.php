@extends('home')

@section('content')
<style>
    .aligncenter {
        text-align: center;
        margin-top: -80px;
    }

</style>
<div class="wrapper">
    <h2 class="text-center" style="line-height:200px">Pesanan Sudah Dikonfirmasi</h2>
    <a href="{{ url('list-inventory') }}" style="text-decoration: none"> </a>
    <p class="aligncenter"> <img src=" {{ asset('img/logo-minierp2.png') }}" alt="centered image" width="200"
            height="200">
    <p class="text-center" style="font-weight: 800;margin-top:-10px">PT. Mokko Otomasi Indonesia</p>
    <p class="text-center" style="margin-top: -15px">Universitas Brawijaya</p>
    </p>
</div>
@endsection
