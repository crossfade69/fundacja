@extends('layouts.admin')

@section('title', 'Logowanie')

@section('content')
    <div class="form-container">
        <h2>Logowanie</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label>Hasło:</label>
                <input type="password" name="password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Zaloguj</button>
        </form>

        <div class="link">
            <a href="{{ url('/register') }}">Nie masz konta? Zarejestruj się!</a>
        </div>
    </div>
@endsection