@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')
@section('judul', '404')
@section('subjudul', 'Halaman tidak ditemukan')

@section('content')
<div class="panel">
    <h2>Oops, halaman yang kamu cari tidak ada</h2>
    <p>Alamat yang kamu buka mungkin salah atau halamannya sudah dipindahkan.</p>
    <p><a href="{{ route('home') }}">&larr; Kembali ke Beranda</a></p>
</div>
@endsection