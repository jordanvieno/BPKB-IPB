@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('project_rpl/operasi.css') }}">

<div class="container">
    <h1>Admin Operasi Panel</h1>

    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

<form method="POST" action="{{ route('admin.operasi.update') }}">
        @csrf
        <!-- Ensure no @method('PUT') is present -->

        @foreach($data as $category => $value)
            <div class="ops-item">
                <h2>{{ $category }}</h2>
                <div class="value-display">{{ $value }}/{{ $maxValues[$category] ?? 300 }}</div>
                <input type="number" name="{{ $category }}" value="{{ old($category, $data[$category] ?? $value) }}" min="0" max="{{ $maxValues[$category] ?? 300 }}">
            </div>
        @endforeach

        <button type="submit">Update Data</button>
    </form>
</div>
@endsection
