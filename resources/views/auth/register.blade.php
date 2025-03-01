@extends('layouts.admin')

@section('title', 'Rejestracja')

@section('content')
    <div class="form-container">
        <h2>Rejestracja</h2>
        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <div>
                <label>Imię:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

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

            <div>
                <label>Potwierdź hasło:</label>
                <input type="password" name="password_confirmation">
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Zarejestruj</button>
        </form>

        <div class="link">
            <a href="{{ url('/login') }}">Masz już konto? Zaloguj się!</a>
        </div>
    </div>
@endsection