@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6">Edit Article</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block font-medium text-sm text-gray-700">Article Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $article->name) }}" required class="border-gray-300 rounded-md shadow-sm mt-1 block w-full" />
        </div>

        <div class="mb-4">
            <label for="content" class="block font-medium text-sm text-gray-700">Content</label>
            <textarea name="content" id="content" rows="6" required class="border-gray-300 rounded-md shadow-sm mt-1 block w-full">{{ old('content', $article->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="date" class="block font-medium text-sm text-gray-700">Date</label>
            <input type="date" name="date" id="date" value="{{ old('date', $article->date->format('Y-m-d')) }}" required class="border-gray-300 rounded-md shadow-sm mt-1 block w-full" />
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Article</button>
        </div>
    </form>
</div>
@endsection
