// navbar.js

// Ambil semua link navbar
const navLinks = document.querySelectorAll("nav a");

// Fungsi untuk menandai link aktif
function highlightActiveLink() {
    const currentPath = window.location.pathname; // Ambil path URL (tanpa hash)
    navLinks.forEach((link) => {
        link.classList.remove("text-indigo-600"); // Hapus highlight dari semua link
        // Cek jika path URL cocok dengan href dari link
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("text-indigo-600"); // Tambahkan highlight pada link yang aktif
        }
    });
}

// Panggil highlightActiveLink() saat halaman dimuat
document.addEventListener("DOMContentLoaded", highlightActiveLink);

// Tambahkan event listener untuk setiap link navbar
navLinks.forEach((link) => {
    link.addEventListener("click", function () {
        navLinks.forEach((link) => link.classList.remove("text-indigo-600")); // Menghapus highlight dari semua link
        this.classList.add("text-indigo-600"); // Menambahkan highlight pada link yang diklik
    });
});
