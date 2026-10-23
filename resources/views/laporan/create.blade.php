@extends('layouts.app')

@section('content')
<h2>Form Pelaporan Banjir</h2>

@if ($errors->any())
    <ul class="error-list">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="form-box">
    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <label>Nama Pelapor</label>
        <input type="text" name="nama_pelapor" value="{{ old('nama_pelapor') }}" required>

        <label>Lokasi (Kecamatan)</label>
        <input type="text" name="lokasi" value="{{ old('lokasi') }}" required>

        <label>Tinggi Genangan (cm)</label>
        <input type="number" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" min="1" required>

        <label>Tanggal Kejadian</label>
        <input type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}" required>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
</div>
@endsection