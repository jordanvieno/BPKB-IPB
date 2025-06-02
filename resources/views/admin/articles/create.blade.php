@extends('layouts.admin')

@push('styles')
<link href="{{ asset('css/create-news.css') }}" rel="stylesheet" />
<style>
  .form-row {
    display: flex;
    gap: 20px;
  }
  .form-col {
    flex: 1;
  }
  .form-news label {
    margin-top: 20px;
    font-weight: 600;
  }
  .form-news input[type="text"],
  .form-news input[type="date"],
  .form-news textarea,
  .form-news input[type="file"] {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #e5e7eb;
    background-color: #F1F4FA;
    font-size: 14px;
    margin-top: 6px;
  }
  .form-buttons {
    display: flex;
    justify-content: flex-end;
    gap: 16px;
    margin-top: 24px;
  }
</style>
@endpush

@section('content')
    <div class="container">
        <main class="main">
            <form class="form-news" action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Create News</h1>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="name">Judul</label>
                <input type="text" name="name" id="name" placeholder="Title" value="{{ old('name') }}" required />

                <div class="form-row">
                    <div class="form-col">
                        <label for="date">Tanggal</label>
                        <div class="input-icon">
                            <input type="date" name="date" id="date" value="{{ old('date') }}" required />
                            <span class="icon">📅</span>
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="author">Penulis</label>
                        <input type="text" name="author" id="author" placeholder="Title" value="{{ old('author') }}" />
                    </div>
                </div>

                <label for="content">Isi Berita</label>
                <textarea name="content" id="content" rows="6" placeholder="Please enter word" required>{{ old('content') }}</textarea>

                <label for="image">Foto</label>
                <input type="file" name="image" id="image" accept="image/*" />

                <div class="form-buttons">
                    <button type="button" class="btn-outline" id="uploadBtn">Upload</button>
                    <button type="submit" class="btn-primary">Save Draft</button>
                </div>
            </form>
        </main>
    </div>

    @push('scripts')
    <script>
        const imageInput = document.getElementById('image');
        const uploadBtn = document.getElementById('uploadBtn');

        uploadBtn.addEventListener('click', () => {
            if (imageInput.files.length > 0) {
                alert('Image ready to be uploaded with the form submission.');
            } else {
                alert('Please select an image to upload.');
            }
        });
    </script>
    @endpush
@endsection
