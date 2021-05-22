@extends('layouts.master')
@section('content')
    <!-- jumbotron -->
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">OURBOOKS</h1>
            <p class="lead my-3">Adalah layanan Pembelian dan Peminjaman buku dengan pelayanan yang mudah dan lengkap serta menyediakan berbagai buku berkualitas</p>
            @if (session()->has('user'))
                
            @else
                <p class="btn btn-info my-2 my-sm-0"><a href="#" class="text-white font-weight-bold">Daftar Sekarang</a></p>
            @endif
            
        </div>
    </div>

    <div class="container">
        <!-- baris -->
        <div class="row">
        <div class="col-md-4">
            <h2>Mudah</h2>
            <p>Peminjaman dan Pembelian buku yang cepat dan mudah diakses</p>
        </div>
        <div class="col-md-4">
            <h2>Murah</h2>
            <p>OURBOOKS menawarkan harga buku terbaik dipasaran</p>
        </div>
        <div class="col-md-4">
            <h2>Berkualitas</h2>
            <p>OURBOOKS bekerjasama dengan beberapa penerbit terbaik dengan kualitas terbaik</p>
        </div>
        </div>
        <hr>
    </div> <!-- /container -->
@endsection