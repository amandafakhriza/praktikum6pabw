@extends('layouts.app')

@section('content')
<h2>Daftar Laporan Banjir</h2>

@forelse ($laporan as $item)
    @include('partials.laporan-card', ['laporan' => $item])
@empty
    <p>Belum ada laporan.</p>
@endforelse
@endsection