<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-4xl mx-auto mt-8 px-4">
        <div class="flex justify-between items-center">
            <!-- Tombol kembali ke halaman sebelumnya -->
            <a href="{{ url('/') }}" class="inline-flex items-center px-4 py-2 text-sm text-gray-600 rounded">
                ← Kembali
            </a>
        </div>
    </div>


    <div class="max-w-4xl mx-auto mt-12 bg-white p-10 rounded-lg shadow-md" x-data="{ editMode: false }">
        {{-- Flash Message --}}
        @if (session('success'))
            <div class="mb-4 text-green-600 font-medium">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex justify-between items-start">
            <!-- Avatar & Info -->
            <div class="flex items-center space-x-4">
                <img class="w-24 h-24 rounded-full object-cover"
                    src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="User Avatar">
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">
                        {{ Auth::user()->username }}
                    </h2>
                    <p class="text-gray-500 text-sm">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- Edit/Save Toggle -->
            <div>
                <template x-if="!editMode">
                    <button @click="editMode = true"
                        class="px-5 py-2 text-sm bg-gray-600 text-white font-medium rounded">
                        Edit
                    </button>
                </template>

                <template x-if="editMode">
                    <button type="submit" form="profileForm"
                        class="px-5 py-2 text-sm bg-green-600 text-white font-medium rounded hover:bg-green-500 transition">
                        Save
                    </button>
                </template>
            </div>
        </div>

        <!-- Username Update Form -->
        <form id="profileForm" action="{{ route('profile.updateUsername') }}" method="POST"
            class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <!-- Full Name (Username) -->
            <div>
                <label class="block text-sm text-gray-700 mb-1">Full Name</label>
                <input type="text" name="username" value="{{ Auth::user()->username }}" :disabled="!editMode"
                    class="w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-100 text-gray-700 disabled:cursor-not-allowed disabled:opacity-70">
            </div>

            <!-- Email (readonly) -->
            <div>
                <label class="block text-sm text-gray-700 mb-1">Email</label>
                <input type="text" value="{{ Auth::user()->email }}" disabled
                    class="w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-100 text-gray-500 cursor-not-allowed">
            </div>
        </form>

        <!-- Password Update Form -->
        <form action="{{ route('profile.updatePassword') }}" method="POST"
            class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <!-- Password Lama -->
            <div>
                <label class="block text-sm text-gray-700 mb-1">Password Lama</label>
                <input type="password" name="current_password" required
                    class="w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-100 text-gray-700">
            </div>

            <!-- Password Baru (dengan toggle) -->
            <div x-data="{ show: false }" class="relative">
                <label class="block text-sm text-gray-700 mb-1">Password Baru</label>
                <input :type="show ? 'text' : 'password'" name="new_password" required
                    class="w-full pr-10 rounded-md border border-gray-300 px-4 py-2 bg-gray-100 text-gray-700">

                <button type="button" @click="show = !show"
                    class="absolute inset-y-0 right-2 flex items-center text-gray-500">
                    <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.955 9.955 0 013.158-4.517M3 3l18 18" />
                    </svg>
                </button>
            </div>

            <!-- Konfirmasi Password Baru -->
            <div>
                <label class="block text-sm text-gray-700 mb-1">Konfirmasi Password Baru</label>
                <input type="password" name="new_password_confirmation" required
                    class="w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-100 text-gray-700">
            </div>

            <div class="md:col-span-2 text-right pt-2">
                <button type="submit" class="px-6 py-2 bg-gray-600 text-white rounded hover:bg-gray-500 transition">
                    Ubah Password
                </button>
            </div>
        </form>

        <div class="flex justify-end mt-4">
            <form action="{{ route('logout') }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-semibold transition">
                    Logout
                </button>
            </form>
        </div>
    </div>

</body>

</html>
