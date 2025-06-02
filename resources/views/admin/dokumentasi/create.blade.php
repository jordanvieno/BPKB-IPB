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
  .form-dokumentasi label {
    margin-top: 20px;
    font-weight: 600;
  }
  .form-dokumentasi input[type="text"],
  .form-dokumentasi input[type="date"],
  .form-dokumentasi textarea,
  .form-dokumentasi input[type="file"] {
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
  #photo-preview {
    margin-top: 10px;
    max-width: 300px;
    max-height: 300px;
    border-radius: 10px;
    object-fit: contain;
  }
</style>
@endpush

@section('content')
    <div class="container">
        <main class="main">
            <form class="form-dokumentasi" action="{{ route('admin.dokumentasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Create Documentation</h1>

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <label for="photo">Foto</label>
                <input type="file" name="photo" id="photo" accept="image/*" />

                <img id="photo-preview" src="#" alt="Photo Preview" style="display:none;" />

                <label for="description">Keterangan</label>
                <textarea name="description" id="description" rows="4" placeholder="Enter description" required>{{ old('description') }}</textarea>

                <label for="date">Tanggal</label>
                <input type="date" name="date" id="date" value="{{ old('date') }}" required />

                <div class="form-buttons">
                    <button type="submit" class="btn-primary">Save Documentation</button>
                </div>
            </form>
        </main>
    </div>

    @push('scripts')
    <script>
        const photoInput = document.getElementById('photo');
        const photoPreview = document.getElementById('photo-preview');

        photoInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    photoPreview.setAttribute('src', e.target.result);
                    photoPreview.style.display = 'block';
                }

                reader.readAsDataURL(file);
            } else {
                photoPreview.setAttribute('src', '#');
                photoPreview.style.display = 'none';
            }
        });
    </script>
    @endpush
@endsection
