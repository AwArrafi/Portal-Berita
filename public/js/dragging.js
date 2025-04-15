// public/js/dragging.js

const scrollContainer = document.getElementById("scrollable-container");
let isMouseDown = false;
let startX;
let scrollLeft;

scrollContainer.addEventListener("mousedown", (e) => {
    isMouseDown = true;
    startX = e.pageX - scrollContainer.offsetLeft; // Posisi awal X mouse
    scrollLeft = scrollContainer.scrollLeft; // Posisi scroll saat klik
    scrollContainer.style.cursor = "grabbing"; // Ubah cursor saat dragging
});

scrollContainer.addEventListener("mouseleave", () => {
    isMouseDown = false;
    scrollContainer.style.cursor = "grab"; // Ubah cursor kembali setelah mouse keluar
});

scrollContainer.addEventListener("mouseup", () => {
    isMouseDown = false;
    scrollContainer.style.cursor = "grab"; // Ubah cursor kembali setelah mouse dilepas
});

scrollContainer.addEventListener("mousemove", (e) => {
    if (!isMouseDown) return; // Tidak bergerak jika mouse tidak ditekan
    e.preventDefault(); // Mencegah pergerakan lain yang tidak diinginkan
    const moveX = e.pageX - startX; // Menghitung pergerakan horizontal
    scrollContainer.scrollLeft = scrollLeft - moveX; // Update posisi scroll
});
