@extends('layouts.admin')

@push('styles')
<style>
  .form-container {
    background-color: #f9fafb;
    padding: 24px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    max-width: 1000px;
    margin: 0 auto;
  }
  h1 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 16px;
    color: #111827;
  }
  a.primary-btn {
    background-color: #3b82f6;
    color: white;
    padding: 10px 16px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
  }
  a.primary-btn:hover {
    background-color: #2563eb;
  }
  table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 12px;
  }
  th {
    text-align: left;
    padding: 12px 16px;
    font-weight: 600;
    color: #374151;
    border-bottom: 2px solid #e5e7eb;
  }
  td {
    background-color: white;
    padding: 12px 16px;
    vertical-align: middle;
    border-radius: 8px;
  }
  tr td:first-child {
    width: 120px;
  }
  tr td img {
    border-radius: 6px;
    max-width: 100px;
    max-height: 60px;
    object-fit: cover;
  }
  .actions a,
  .actions a,
  .actions button {
    margin-right: 12px;
    font-weight: 600;
    cursor: pointer;
    background: none;
    border: none;
    padding: 6px 14px;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    transition: background-color 0.3s ease;
  }
  .actions button,
  .actions a {
    color: #3b82f6;
    background-color: transparent;
    text-decoration: underline;
  }
  .actions button:hover,
  .actions a:hover {
    color: #2563eb;
    background-color: #e0e7ff;
  }
  .actions .delete-button {
    color: #dc2626; /* red */
    text-decoration: none;
  }
  .actions .delete-button:hover {
    background-color: #fee2e2;
    color: #dc2626; /* keep red on hover */
  }
  .actions form {
    display: inline;
  }
  .success-message {
    background-color: #d1fae5;
    color: #065f46;
    padding: 12px 16px;
    border-radius: 8px;
    margin-bottom: 16px;
    font-weight: 600;
  }
</style>
@endpush

@section('content')
    <div class="form-container">
        <h1>Manage News</h1>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.articles.create') }}" class="primary-btn">Create New News</a>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>
                        @if ($article->image_path)
                            <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->name }}" />
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->date->format('F j, Y') }}</td>
                    <td class="actions" style="display: flex; flex-direction: column; gap: 6px;">
                        <form action="{{ route('admin.articles.show', $article) }}" method="GET" style="display:inline;">
                            <button type="submit" style="background-color: #2563eb; color: white; border: none; padding: 6px 12px; border-radius: 6px;">Detail</button>
                        </form>
                        <form action="{{ route('admin.articles.edit', $article) }}" method="GET" style="display:inline;">
                            <button type="submit" style="background-color: #facc15; color: black; border: none; padding: 6px 12px; border-radius: 6px;">Edit</button>
                        </form>
                        <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: #dc2626; color: white; border: none; padding: 6px 12px; border-radius: 6px;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
