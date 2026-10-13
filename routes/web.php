
<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman profil program studi
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

// Daftar dosen, dengan filter keahlian

Route::get('/dosen', function () {
    $keahlian = request('keahlian');

    $dosen = [
        ['nidn' => '0011223344', 'nama' => 'Nemo 1', 'keahlian' => 'Jaringan'],
        ['nidn' => '0022334455', 'nama' => 'Nemo 2', 'keahlian' => 'Sistem Cerdas'],
        ['nidn' => '0033445566', 'nama' => 'Nemo 3', 'keahlian' => 'Multimedia'],
    ];

    if ($keahlian) {
        $dosen = array_filter($dosen, function ($item) use ($keahlian) {
            return stripos($item['keahlian'], $keahlian) !== false;
        });
    }

    return view('dosen', ['dosen' => array_values($dosen)]);
})->name('dosen.index');


// Detail Nemo 2erdasarkan NIDN

Route::get('/dosen/{nidn}', function ($nidn) {
    if (!preg_match('/^\d{10}$/', $nidn)) {
        abort(404);
    }

    $dosen = [
        '0011223344' => [
            'nidn' => '0011223344',
            'nama' => 'Nemo 1',
            'keahlian' => 'Jaringan'
        ],
        '0022334455' => [
            'nidn' => '0022334455',
            'nama' => 'Nemo 2',
            'keahlian' => 'Sistem Cerdas'
        ],
        '0033445566' => [
            'nidn' => '0033445566',
            'nama' => 'Nemo 3',
            'keahlian' => 'Multimedia'
        ],
    ];

    abort_unless(isset($dosen[$nidn]), 404);

    return view('detail-dosen', [
        'dosen' => $dosen[$nidn]
    ]);
})->name('dosen.show');


// API dosen dalam format JSON
Route::get('/api/dosen', function () {
    return response()->json([
        ['nidn' => '0011223344', 'nama' => 'Nemo 1', 'keahlian' => 'Jaringan'],
        ['nidn' => '0022334455', 'nama' => 'Nemo 2', 'keahlian' => 'Sistem Cerdas'],
        ['nidn' => '0033445566', 'nama' => 'Nemo 3', 'keahlian' => 'Multimedia'],
    ]);
})->name('api.dosen');


Route::get('/berita/{kategori?}', function ($kategori = 'terbaru') {
    $berita = [
        ['judul' => 'Penerimaan Mahasiswa Baru Dibuka', 'kategori' => 'akademik', 'tanggal' => '10 Oktober 2026', 'isi' => 'Pendaftaran mahasiswa baru Program Studi Teknik Informatika telah dibuka.'],
        ['judul' => 'Seminar Teknologi Informasi', 'kategori' => 'kegiatan', 'tanggal' => '5 Oktober 2026', 'isi' => 'Seminar bersama praktisi industri membahas perkembangan teknologi terbaru.'],
        ['judul' => 'Jadwal Ujian Tengah Semester', 'kategori' => 'akademik', 'tanggal' => '1 Oktober 2026', 'isi' => 'Jadwal UTS semester ganjil telah diumumkan dan dapat dilihat di bagian akademik.'],
        ['judul' => 'Lomba Pemrograman Antar Mahasiswa', 'kategori' => 'kegiatan', 'tanggal' => '25 September 2026', 'isi' => 'Himpunan mahasiswa mengadakan lomba pemrograman tingkat program studi.'],
    ];

    // "terbaru" menampilkan semua berita, kategori lain disaring
    if ($kategori !== 'terbaru') {
        $berita = array_values(array_filter($berita, function ($item) use ($kategori) {
            return $item['kategori'] === $kategori;
        }));
    }

    return view('berita', [
        'kategori' => $kategori,
        'berita' => $berita,
    ]);
})->name('berita');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/pengaturan', function () {
        return view('admin.pengaturan');
    })->name('pengaturan');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
