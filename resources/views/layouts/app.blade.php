<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        :root {
            --kuning: #FFC107;
            --kuning-tua: #E0A800;
            --kuning-muda: #FFF8E1;
            --teks: #3E2F00;
        }
        * { box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--kuning-muda);
            color: var(--teks);
            margin: 0;
        }
        header {
            background: var(--kuning);
            padding: 14px 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,.15);
        }
        .header-isi {
            max-width: 900px; margin: 0 auto;
            display: flex; justify-content: space-between; align-items: center;
            flex-wrap: wrap; gap: 10px;
        }
        .logo { font-size: 1.4rem; font-weight: bold; }
        .logo small { display: block; font-size: .7rem; font-weight: normal; }
        nav a {
            text-decoration: none; color: var(--teks); font-weight: 600;
            padding: 8px 14px; border-radius: 6px; margin-left: 6px;
        }
        nav a:hover { background: var(--kuning-tua); }
        main { max-width: 900px; margin: 25px auto; padding: 0 20px; }
        h2 { border-left: 6px solid var(--kuning); padding-left: 10px; }
        .card {
            background: #fff; border-left: 6px solid var(--kuning);
            border-radius: 8px; padding: 16px; margin-bottom: 14px;
            box-shadow: 0 2px 5px rgba(0,0,0,.08);
        }
        .card h3 { margin: 0 0 8px; }
        .card p { margin: 4px 0; }
        .badge {
            display: inline-block; padding: 4px 12px; border-radius: 20px;
            font-weight: bold; font-size: .85rem; margin-top: 8px; color: #fff;
        }
        .badge-waspada { background: #F9A825; color: #3E2F00; }
        .badge-siaga   { background: #EF6C00; }
        .badge-awas    { background: #C62828; }
        .form-box {
            background: #fff; padding: 22px; border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,.1); max-width: 480px;
        }
        label { display: block; margin-top: 12px; font-weight: 600; }
        input {
            width: 100%; padding: 9px; margin-top: 5px;
            border: 1px solid #d6c27a; border-radius: 6px; font-size: 1rem;
        }
        input:focus { outline: 2px solid var(--kuning); }
        .btn {
            margin-top: 18px; padding: 10px 20px; background: var(--kuning);
            border: none; border-radius: 6px; font-weight: bold;
            font-size: 1rem; cursor: pointer; color: var(--teks);
            text-decoration: none; display: inline-block;
        }
        .btn:hover { background: var(--kuning-tua); }

        .error-list {
            background: #f8d7da; color: #721c24; padding: 10px 10px 10px 30px;
            border-radius: 6px; margin-bottom: 15px;
        }

        footer { text-align: center; padding: 20px; font-size: .85rem; }
    </style>
</head>
<body>
    <header>
        <div class="header-isi">
            <div class="logo"> LaporBanjir <small>BPBD Kabupaten Bandung</small></div>
            <nav>
                <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
                <a href="{{ route('laporan.create') }}">Buat Laporan</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>&copy; {{ date('Y') }} BPBD Kabupaten Bandung</footer>
</body>
</html>