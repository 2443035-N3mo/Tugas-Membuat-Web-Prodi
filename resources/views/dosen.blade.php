@extends('layouts.app')

@section('title', 'Data Dosen')
@section('judul', 'Data Dosen')

@push('styles')
<style>
    form { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 24px; }
    input, button { padding: 11px 14px; border-radius: 6px; font-size: 14px; }
    input { border: 1px solid #cbd5e1; flex: 1; min-width: 200px; }
    button { background: #253b80; color: white; border: none; cursor: pointer; }
    .reset { color: #253b80; align-self: center; text-decoration: none; }
    .table-wrap { overflow-x: auto; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 14px; text-align: left; border-bottom: 1px solid #e2e8f0; }
    th { background: #edf2ff; color: #253b80; }
    td a { color: #253b80; font-weight: bold; text-decoration: none; }
</style>
@endpush

@section('content')
<div class="panel">
    <h2>Daftar Dosen</h2>
    <p>Cari dosen berdasarkan bidang keahliannya.</p>

    <form method="GET" action="{{ route('dosen.index') }}">
        <input
            type="text"
            name="keahlian"
            placeholder="Contoh: Jaringan"
            value="{{ request('keahlian') }}"
        >
        <button type="submit">Cari</button>
        <a class="reset" href="{{ route('dosen.index') }}">Reset</a>
    </form>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Keahlian</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dosen as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item['nidn'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['keahlian'] }}</td>
                        <td>
                            <a href="{{ route('dosen.show', $item['nidn']) }}">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada dosen yang cocok dengan pencarian.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection