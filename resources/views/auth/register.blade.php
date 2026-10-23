@extends('layouts.app')
@section('content')
<h2>Register Petugas</h2>
<div class="form-box">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Nama</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}"
               required autofocus autocomplete="name">
        @error('name')
            <div class="field-error">{{ $message }}</div>
        @enderror
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
               required autocomplete="email">
        @error('email')
            <div class="field-error">{{ $message }}</div>
        @enderror

        <label for="password">Password (minimal 8 karakter)</label>
        <input id="password" type="password" name="password"
               required autocomplete="new-password">
        @error('password')
            <div class="field-error">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Konfirmasi Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation"
               required autocomplete="new-password">

        <button type="submit" class="btn">Register</button>
    </form>
</div>
@endsection