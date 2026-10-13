
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            color: #1e293b;
        }
        header {
            background: #1d4ed8;
            color: white;
            padding: 24px;
            text-align: center;
        }
        main {
            max-width: 600px;
            margin: 35px auto;
            padding: 28px;
            background: white;
            border-radius: 12px;
        }
        .info {
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        a {
            color: #1d4ed8;
            text-decoration: none;
        }
        .back {
            display: inline-block;
            margin-top: 22px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Detail Dosen</h1>
        <p>Informasi dosen program studi</p>
    </header>

    <main>
        <div class="info">
            <strong>Nama:</strong> {{ $dosen['nama'] }}
        </div>

        <div class="info">
            <strong>NIDN:</strong> {{ $dosen['nidn'] }}
        </div>

        <div class="info">
            <strong>Keahlian:</strong> {{ $dosen['keahlian'] }}
        </div>

        <a class="back" href="{{ route('dosen.index') }}">
            &larr; Kembali ke Data Dosen
        </a>
    </main>
</body>
</html>
