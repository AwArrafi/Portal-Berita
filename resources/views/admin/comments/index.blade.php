@extends('admin.layouts.app')

@section('title', 'Manage Comments')
@section('page-title', 'Manage Comments')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">List of Comments</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-2 border">User</th>
                    <th class="p-2 border">Comment</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comments as $comment)
                    <tr class="hover:bg-gray-100">
                        <td class="p-2 border">{{ $comment->user->name }}</td>
                        <td class="p-2 border">{{ $comment->komentar }}</td>
                        <td class="p-2 border">
                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="p-2 text-center">No comments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
