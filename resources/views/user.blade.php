@extends('home')

@section('content')
    <style>
        .aligncenter {
            text-align: center;
            margin-top: -80px;
        }

    </style>
    <div class="wrapper">
        <h2 class="text-center" style="line-height:200px">Hi Selamat Datang di Mini ERP</h2>
        <a href="{{ url('list-inventory') }}" style="text-decoration: none"> </a>
        <p class="aligncenter"> <img src=" {{ asset('img/logo-minierp2.png') }}" alt="centered image" width="200"
            height="200" style="margin-top: 20px;">
        <p class="text-center" style="font-weight: 700;margin-top: 20px;">PT. Mokko Otomasi Indonesia</p>
        <p class="text-center" style="margin-top: -15px">Universitas Brawijaya</p>
    </div>

@endsection
