<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md flex flex-col">
        <div class="p-6 flex items-center space-x-2 border-b">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>

            <span class="font-bold text-xl">News Admin</span>
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('admin.berita.index') }}"
                class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-100 rounded transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                </svg>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.comments.index') }}"
                class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-100 rounded transition">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>


                <span>Manage Comments</span>
            </a>

            <a href="{{ route('admin.berita.create') }}"
                class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-100 rounded transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Tambah Berita
            </a>


            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center w-full px-4 py-2 text-gray-700 hover:bg-indigo-100 rounded transition">
                    <svg class="w-5 h-5 mr-2" /* icon settings * /></svg>
                    <span>Settings</span>
                    <svg :class="{ 'rotate-180': open }" class="ml-auto w-4 h-4 transition-transform"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="open" class="mt-2 bg-white rounded shadow py-2 space-y-1">
                    <a href="{{ route('admin.profile.edit') }}" class="block px-4 py-2 hover:bg-indigo-100">Profile</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block px-4 py-2 hover:bg-indigo-100">Logout</a>
                </div>
            </div>
        </nav>

        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
            @csrf
        </form>

        </nav>
    </aside>


    <!-- Main content -->
    <main class="flex-1 p-8 overflow-auto">
        <!-- Header -->
        <header class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold">@yield('page-title', 'Dashboard')</h1>
            </div>
            <div>
                <img src="https://i.pravatar.cc/40" alt="User Avatar" class="rounded-full" />
            </div>
        </header>

        <!-- Content -->
        <section>
            @yield('content')
        </section>
    </main>

    @vite('resources/js/app.js')

</body>

</html>
