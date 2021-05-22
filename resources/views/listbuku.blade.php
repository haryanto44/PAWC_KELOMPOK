@extends('layouts.master')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tahun Terbit</th>
        <th scope="col">Tebal Halaman</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($daftar_buku as $buku)
        <tr>
            <th scope="row">{{$buku->id}}</th>
            <td>{{$buku->judul_buku}}</td>
            <td>{{$buku->pengarang}}</td>
            <td>{{$buku->penerbit}}</td>
            <td>{{$buku->tahun_terbit}}</td>
            <td>{{$buku->tebal_halaman}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection