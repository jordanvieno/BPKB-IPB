@extends('layouts.admin')

@section('content')
    <div class="dashboard-container" style="padding: 20px; background-color: #e0e7ff; min-height: 100vh;">
        <h1 style="text-align: center; margin-bottom: 20px;">Welcome to Admin BPKB IPB University</h1>
        <div style="display: flex; justify-content: center;">
            <img src="{{ asset('asset/harmonis.png') }}" alt="Dashboard Image" style="max-width: 600px; width: 100%; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);" />
        </div>
    </div>
@endsection
