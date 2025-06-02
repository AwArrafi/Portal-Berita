@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <div class="bg-white rounded shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Welcome to Admin Dashboard</h2>
    </div>
    <a href="{{ route('admin.berita.index') }}">Lihat Data Berita</a>

@endsection
