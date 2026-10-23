@extends('layouts.app')

@section('content')
<h2>Login Petugas</h2>

<div class="form-box">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
               required autofocus autocomplete="email">
        @error('email')
            <div class="field-error">{{ $message }}</div>
        @enderror

        <label for="password">Password</label>
        <input id="password" type="password" name="password"
               required autocomplete="current-password">
        @error('password')
            <div class="field-error">{{ $message }}</div>
        @enderror

        <label class="cek">
            <input type="checkbox" name="remember" value="1"> Ingat saya
        </label>

        <button type="submit" class="btn">Login</button>
    </form>
</div>
@endsection