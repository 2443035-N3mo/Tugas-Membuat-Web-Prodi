@extends('layouts.app')

@section('title', 'Dashboard Admin')
@section('judul', 'Dashboard Admin')
@section('subjudul', 'Pengelolaan website program studi')

@section('content')
<div class="panel">
    <h2>Selamat Datang, Admin</h2>
    <p>Ini adalah halaman pengelolaan website Program Studi Teknik Informatika.</p>
</div>

<div class="panel">
    <h2>Ringkasan</h2>
    <ul>
        <li>Jumlah dosen: 3</li>
        <li>Kategori berita: Terbaru, Akademik, Kegiatan</li>
    </ul>
</div>

<div class="panel">
    <h2>Menu Admin</h2>
    <p>
        <a href="{{ route('admin.pengaturan') }}">Pengaturan</a> |
        <a href="{{ route('dosen.index') }}">Data Dosen</a> |
        <a href="{{ route('berita') }}">Berita</a>
    </p>
</div>
@endsection