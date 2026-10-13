@extends('layouts.app')

@section('title', 'Berita')
@section('judul', 'Berita Program Studi')

@section('content')
<div class="panel">
    <h2>Berita Kategori: {{ ucfirst($kategori) }}</h2>

    <p>
        <a href="{{ route('berita', 'terbaru') }}">Terbaru</a> |
        <a href="{{ route('berita', 'akademik') }}">Akademik</a> |
        <a href="{{ route('berita', 'kegiatan') }}">Kegiatan</a>
    </p>
</div>

@forelse ($berita as $item)
    <div class="panel">
        <h2>{{ $item['judul'] }}</h2>
        <small>{{ $item['tanggal'] }} &middot; {{ ucfirst($item['kategori']) }}</small>
        <p>{{ $item['isi'] }}</p>
    </div>
@empty
    <div class="panel">
        <p>Belum ada berita pada kategori ini.</p>
    </div>
@endforelse
@endsection