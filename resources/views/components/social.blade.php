<div x-data="{
    scrollToAbout() {
        this.$refs.about.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}">
    <!-- Hapus link Tentang Kami di navbar (link sudah tidak diperlukan) -->

    <!-- Bagian "Tentang Kami" yang akan di-scroll -->
    <div x-ref="about" id="aboutSection" class="text-center py-12 mt-24 mb-12">
        <h3 class="text-2xl font-semibold">Tentang Kami</h3>
        <div class="flex justify-center mt-8 space-x-12">
            <!-- Instagram -->
            <div class="flex items-center">
                <p class="text-3xl font-semibold mr-4">Awang Arrafi</p>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="{{ asset('assets/img/instagram.png') }}" alt="Instagram" class="h-40 w-40">
                </a>
            </div>

            <!-- TikTok -->
            <div class="flex items-center">
                <p class="text-3xl font-semibold mr-4">Awang Arrafi</p>
                <a href="https://www.tiktok.com" target="_blank">
                    <img src="{{ asset('assets/img/tiktok.png') }}" alt="TikTok" class="h-40 w-40">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- jQuery for smooth scrolling -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Ketika link "Tentang Kami" di navbar di klik
    $('#goToAbout').click(function() {
        // Scroll ke bagian "Tentang Kami" menggunakan jQuery
        $('html, body').animate({
            scrollTop: $('#aboutSection').offset().top
        }, 600); // 600 adalah durasi scroll dalam milidetik
    });
</script>
