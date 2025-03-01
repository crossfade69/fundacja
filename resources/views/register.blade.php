@extends('layouts.admin')

@section('content')
<div class="py-10 space-y-10 text-lg">
    <form method="POST" action="{{ route('register') }}" class="bg-white p-8 rounded-lg shadow-md w-96">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-center">Rejestracja</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Imię i nazwisko</label>
            <input type="text" name="name" id="name" class="w-full p-2 border rounded-lg" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border rounded-lg" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Hasło</label>
            <input type="password" name="password" id="password" class="w-full p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Powtórz hasło</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border rounded-lg" required>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Zarejestruj</button>

        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-sm text-blue-500 hover:text-blue-700">Masz już konto? Zaloguj się</a>
        </div>
    </form>
</div>
@endsection