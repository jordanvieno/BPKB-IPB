@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6 bg-white rounded shadow max-w-3xl">
    <h1 class="text-3xl font-bold mb-4">{{ $article->name }}</h1>
    <p class="text-gray-600 mb-2">By {{ $article->author ?? 'Unknown' }} | {{ $article->date->format('F j, Y') }}</p>
    @if ($article->image_path)
        <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->name }}" class="mb-4 rounded max-w-full h-auto" />
    @endif
    <div class="prose max-w-none">
        {!! nl2br(e($article->content)) !!}
    </div>
    <a href="{{ route('admin.articles.index') }}" class="mt-6 inline-block text-blue-600 hover:underline">Back to Articles</a>
</div>
@endsection
