@extends('layouts.app')

@section('content')
        <h1 class="text-2xl font-bold mb-6">Sprawozdania</h1>

        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <div class="border min-w-80 basis-1/3 flex-1 max-w-1/2 shadow-lg transition duration-300 hover:shadow-2xl">
                        <div class="items-center px-2 w-full bg-white md:flex-row">
                            <h5 class="mt-2 font-bold tracking-tight text-lg text-blue-700 hover:text-red-500">
                                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                            </h5>
                            <hr class="my-2"/>
                            <p class="mb-3 font-normal break-all">{{ Str::limit($post->content, 150) }}</p>
                        </div>
                        <p class="flex-end flex mb-2 mx-2">
                            <a href="{{ route('posts.show', $post->id) }}" class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">Czytaj Dalej</a>
                        </p>
                    </div>
                @endforeach
            </div>
            
        </div>
                @else
                <p class="text-gray-600">Brak postów do wyświetlenia.</p>
                @endif
        </div>
@endsection