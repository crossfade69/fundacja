@extends('layouts.app')

@section('title', $post->title)

@section('content')
        <h1 class="text-2xl font-bold mb-6">{{ $post->title }}</h1>
        <p class="text-sm text-gray-600">{{ $post->category }}</p>
        <p class="mt-4">{{ $post->content }}</p>
    </div>
@endsection