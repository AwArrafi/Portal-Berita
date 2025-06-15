<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeNews</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://portal-berita-production-b9eb.up.railway.app/build/assets/app-2Ltsdhws.css">
    <script src="https://portal-berita-production-b9eb.up.railway.app/build/assets/app-DaBYqt0m.js" defer></script>

</head>

<body>

    <a href="{{ url('/login') }}" class="inline-flex mt-2.5 items-center px-4 py-2 text-sm font-semibold text-gray-900">
        <!-- SVG Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 mr-2">
            <path fill-rule="evenodd"
                d="M12.5 9.75A2.75 2.75 0 0 0 9.75 7H4.56l2.22 2.22a.75.75 0 1 1-1.06 1.06l-3.5-3.5a.75.75 0 0 1 0-1.06l3.5-3.5a.75.75 0 0 1 1.06 1.06L4.56 5.5h5.19a4.25 4.25 0 0 1 0 8.5h-1a.75.75 0 0 1 0-1.5h1a2.75 2.75 0 0 0 2.75-2.75Z"
                clip-rule="evenodd"  />
        </svg>
        Kembali ke Halaman Login
    </a>


    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-25 w-auto"
                src="{{ asset('assets/img/we-news-high-resolution-logo-transparent.png') }}" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Create an Account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <!-- Formulir untuk pendaftaran -->
            <form class="space-y-6" action="{{ route('register') }}" method="POST">
                @csrf <!-- CSRF token untuk keamanan -->

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
                    <div class="mt-2">
                        <input type="text" name="username" id="username" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-900">Confirm
                        Password</label>
                    <div class="mt-2">
                        <input type="password" name="password_confirmation" id="confirm-password"
                            autocomplete="current-password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>
