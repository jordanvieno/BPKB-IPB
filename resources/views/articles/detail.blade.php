@extends('layouts.app')

@push('styles')
<style>
  .article-container {
    max-width: 800px;
    margin: 2rem auto;
    padding: 0 1rem;
    font-family: 'Georgia', serif;
    color: #333;
  }
  .article-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #1a202c;
  }
  .article-meta {
    font-size: 0.9rem;
    color: #718096;
    margin-bottom: 2rem;
  }
  .article-image {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 2rem;
  }
  .article-content {
    font-size: 1.125rem;
    line-height: 1.8;
    white-space: pre-line;
  }
</style>
@endpush

@section('content')
<div class="articles-detail article-container" style="padding-top: 120px; text-align: center;">
    <h1 class="article-title">{{ $article->name }}</h1>
    <div class="article-meta">
        By {{ $article->author ?? 'Unknown' }} | {{ $article->date->format('F j, Y') }}
    </div>
    @if ($article->image_path)
        <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->name }}" class="article-image" style="margin-left: auto; margin-right: auto; width: auto; height: auto; max-width: none;" />
    @endif
    <div class="article-content" style="text-align: left;">
        {!! nl2br(e($article->content)) !!}
    </div>
</div>
@endsection
