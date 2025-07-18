<div>
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="text-2xl font-extrabold italic"
                    style="font-family: 'Poppins', sans-serif; font-weight: 700;">WeNews</span>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <!-- Berita Terkini -->
            <a href="{{ route('home') }}"
                class="text-sm font-semibold text-gray-900 {{ request()->is('/') ? 'underline decoration-2 underline-offset-4' : '' }}">
                Berita Terkini
            </a>

            <!-- Berita Lainnya -->
            <a href="{{ route('otherNews') }}"
                class="text-sm font-semibold text-gray-900 {{ request()->is('otherNews') ? 'underline decoration-2 underline-offset-4' : '' }}">
                Berita Lainnya
            </a>

            <!-- Tentang Kami -->
            <a href="javascript:void(0)" id="goToAbout" class="text-sm font-semibold text-gray-900">
                Tentang Kami
            </a>
        </div>

        <!-- Profile or Login -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @auth
                <a href="{{ route('profile') }}" class="flex items-center space-x-2 text-sm font-semibold text-gray-900">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="{{ Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : 'https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}"
                        alt="Avatar">
                </a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            @endauth
        </div>
    </nav>
</div>

<!-- jQuery untuk Scroll ke Tentang Kami -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Menambahkan event click pada link "Tentang Kami"
        $('#goToAbout').click(function() {
            // Scroll ke bagian dengan ID 'about'
            $('html, body').animate({
                scrollTop: $('#about').offset().top
            }, 500); // 500ms adalah durasi scroll
        });

        // Menambahkan underline dinamis pada "Berita Terkini" dan "Berita Lainnya"
        var currentPath = window.location.pathname;
        $('#beritaTerkini, #beritaLainnya').removeClass('underline');
        if (currentPath === '{{ route('home') }}') {
            $('#beritaTerkini').addClass('underline');
        } else if (currentPath === '{{ route('otherNews') }}') {
            $('#beritaLainnya').addClass('underline');
        }
    });
</script>
