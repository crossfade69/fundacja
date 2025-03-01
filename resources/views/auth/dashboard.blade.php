@extends('layouts.admin')

@section('title', 'Panel użytkownika')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Dodaj nowy post</h1>

        <!-- Formularz do tworzenia postów -->
        <form action="{{ route('posts.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategoria</label>
                <select name="category" id="category" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="aktualności">Aktualności</option>
                    <option value="projekty">Projekty</option>
                    <option value="sprawozdania">Sprawozdania</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Tytuł</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Treść</label>
                <textarea name="content" id="content" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required></textarea>
            </div>
            <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-teal-600">Dodaj post</button>
        </form>

        <!-- Komunikat sukcesu -->
        @if(session('success'))
            <div class="mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        

        <!-- Lista postów -->
        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">Lista postów</h2>
            @if(isset($posts) && $posts->count() > 0)
                @foreach($posts as $post)
                    <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                        <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                        <p class="text-sm text-gray-600">{{ $post->category }}</p>
                        <p class="mt-2">{{ $post->content }}</p>
                    </div>
                @endforeach
            @else
                <p class="text-gray-600">Brak postów do wyświetlenia.</p>
            @endif
        </div>
        </div>
        <!-- Przycisk wylogowania -->
        <div class="mt-8 text-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Wyloguj się</button>
            </form>
        </div>
    </div>
@endsection