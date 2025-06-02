@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6 bg-white rounded shadow max-w-3xl">
    <h1 class="text-3xl font-bold mb-4">Documentation Details</h1>
    <p class="text-gray-600 mb-2">Date: {{ \Carbon\Carbon::parse($documentation->date)->format('F j, Y') }}</p>
    @if ($documentation->photo_path)
        <img src="{{ asset('storage/' . $documentation->photo_path) }}" alt="Documentation Photo" class="mb-4 rounded max-w-full h-auto" />
    @endif
    <div class="prose max-w-none">
        {!! nl2br(e($documentation->description)) !!}
    </div>
    <a href="{{ route('admin.dokumentasi.index') }}" class="mt-6 inline-block text-blue-600 hover:underline">Back to Documentation List</a>

    <div class="mt-4 flex flex-col gap-2">
        <a href="{{ route('admin.dokumentasi.edit', $documentation) }}" class="inline-block bg-yellow-400 text-black px-4 py-2 rounded hover:bg-yellow-500">Edit Documentation</a>
        <form action="{{ route('admin.dokumentasi.destroy', $documentation) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this documentation?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Delete Documentation</button>
        </form>
    </div>
</div>
@endsection
