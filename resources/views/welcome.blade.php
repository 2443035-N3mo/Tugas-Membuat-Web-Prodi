
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Teknik Informatika</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fc;
            color: #26334d;
        }

        header {
            background: #253b80;
            color: white;
            padding: 24px 8%;
        }

        header h1 {
            margin: 0 0 8px;
        }

        header p {
            margin: 0;
            color: #e0e7ff;
        }

        nav {
            background: #192b60;
            padding: 16px 8%;
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            background: linear-gradient(135deg, #253b80, #5374c5);
            color: white;
            padding: 70px 8%;
        }

        .hero h2 {
            font-size: 36px;
            max-width: 650px;
            margin-top: 0;
        }

        .hero p {
            max-width: 650px;
            line-height: 1.8;
        }

        .button {
            display: inline-block;
            margin-top: 18px;
            padding: 12px 20px;
            background: white;
            color: #253b80;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        main {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            color: #253b80;
            margin-bottom: 25px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 3px 12px #0000000d;
        }

        .card h3 {
            color: #253b80;
        }

        .card p {
            line-height: 1.7;
        }

        .card a {
            color: #253b80;
            font-weight: bold;
            text-decoration: none;
        }

        footer {
            margin-top: 50px;
            background: #192b60;
            color: white;
            padding: 24px;
            text-align: center;
        }

        @media (max-width: 600px) {
            .hero h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Teknik Informatika</h1>
        <p>STMIK Widya Cipta Dharma</p>
    </header>

    <nav>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('profil') }}">Profil Prodi</a>
        <a href="{{ route('dosen.index') }}">Dosen</a>
        <a href="{{ route('berita') }}">Berita</a>
        <a href="{{ route('admin.dashboard') }}">Admin</a>
    </nav>

    <section class="hero">
        <h2>Selamat Datang di Program Studi Teknik Informatika</h2>
        <p>
            Kenali program studi, tenaga pengajar, informasi berita,
            dan berbagai bidang keahlian dalam dunia teknologi informasi.
        </p>
        <a class="button" href="{{ route('profil') }}">Jelajahi Profil Prodi</a>
    </section>

    <main>
        <h2 class="section-title">Jelajahi Website</h2>

        <div class="cards">
            <div class="card">
                <h3>Profil Program Studi</h3>
                <p>Pelajari informasi program studi, visi, dan misi.</p>
                <a href="{{ route('profil') }}">Lihat Profil →</a>
            </div>

            <div class="card">
                <h3>Data Dosen</h3>
                <p>Lihat daftar dosen dan bidang keahlian yang tersedia.</p>
                <a href="{{ route('dosen.index') }}">Lihat Dosen →</a>
            </div>

            <div class="card">
                <h3>Berita</h3>
                <p>Jelajahi informasi dan berita seputar program studi.</p>
                <a href="{{ route('berita') }}">Lihat Berita →</a>
            </div>

            <div class="card">
                <h3>Dashboard Admin</h3>
                <p>Akses halaman dashboard dan pengaturan admin.</p>
                <a href="{{ route('admin.dashboard') }}">Buka Dashboard →</a>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Program Studi Teknik Informatika</p>
        <p>STMIK Widya Cipta Dharma</p>
    </footer>
</body>
</html>
