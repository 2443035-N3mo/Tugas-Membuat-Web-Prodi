@extends('layouts.app')

@section('title', 'Pengaturan Admin')
@section('judul', 'Pengaturan Admin')
@section('subjudul', 'Pengaturan website program studi')

@section('content')
<div class="panel">
    <h2>Pengaturan Website</h2>
    <p>Nama program studi: Teknik Informatika</p>
    <p>Institusi: STMIK Widya Cipta Dharma</p>
    <p><a href="{{ route('admin.dashboard') }}">&larr; Kembali ke Dashboard</a></p>
</div>
@endsection