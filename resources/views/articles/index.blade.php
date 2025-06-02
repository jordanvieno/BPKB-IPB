@extends('layouts.app')

@section('content')
<div class="articles-index max-w-7xl mx-auto py-10 sm:px-6 lg:px-8" style="padding-top: 120px; padding-bottom: 120px;">
    <h1 class="text-4xl font-serif font-semibold mb-6" style="font-family: 'Georgia', serif; color: #1a2b8d;">Daftar Berita</h1>
    <div class="space-y-12">
        @foreach ($articles as $article)
        <a href="{{ route('articles.detail', $article) }}" class="block group rounded-lg overflow-hidden border border-gray-200 bg-white shadow hover:shadow-lg transition-shadow duration-300 mb-12">
            @if ($article->image_path)
            <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->name }}" class="w-full mb-4" style="max-width: 700px; max-height: 400px; height: auto; object-fit: cover;" />
            @endif
            <div class="p-6">
                <p class="text-gray-500 text-sm mb-2">{{ $article->date->format('d/m/Y') }}</p>
                <h2 class="article-title text-3xl font-extrabold mb-4 text-black group-hover:text-yellow-400 transition-colors duration-300">{{ $article->name }}</h2>
                <p class="text-gray-700 mb-6">{{ Str::limit(strip_tags($article->content), 250, '...') }}</p>
                <span class="news-button">Read More</span>
            </div>
        </a>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $articles->links() }}
    </div>
</div>
@endsection
