<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Teknik Informatika</title>

    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f4f7fc; color: #26334d; }
        header { background: #253b80; color: white; padding: 24px 8%; }
        nav { background: #192b60; padding: 16px 8%; }
        nav a { color: white; text-decoration: none; margin-right: 24px; padding-bottom: 4px; }
        nav a.active { font-weight: bold; border-bottom: 2px solid white; }
        main { max-width: 1000px; margin: 35px auto; padding: 0 20px; }
        .panel { background: white; padding: 24px; margin-bottom: 20px; border-radius: 12px; box-shadow: 0 3px 12px #0000000d; }
        h2 { color: #253b80; }
        footer { background: #192b60; color: white; text-align: center; padding: 20px; margin-top: 40px; }
    </style>
    @stack('styles')
</head>
<body>
    <header>
        <h1>@yield('judul')</h1>
        <p>@yield('subjudul', 'Program Studi Teknik Informatika')</p>
    </header>

    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Profil Prodi</a>
        <a href="{{ route('dosen.index') }}" class="{{ request()->routeIs('dosen.*') ? 'active' : '' }}">Dosen</a>
        <a href="{{ route('berita') }}" class="{{ request()->routeIs('berita') ? 'active' : '' }}">Berita</a>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.*') ? 'active' : '' }}">Admin</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2026 Program Studi Teknik Informatika
    </footer>
</body>
</html>