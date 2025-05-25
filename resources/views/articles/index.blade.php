@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6">Articles</h1>

    @foreach ($articles as $article)
        <div class="mb-8 p-6 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold mb-2">{{ $article->name }}</h2>
            <p class="text-gray-600 text-sm mb-4">{{ $article->date->format('F j, Y') }}</p>
            <div class="prose max-w-none">
                {!! nl2br(e($article->content)) !!}
            </div>
        </div>
    @endforeach
</div>
@endsection
