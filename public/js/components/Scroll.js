// Ambil elemen-elemen yang diperlukan
const header = document.querySelector("header");
const nav = document.querySelector("nav");

// Membuat fungsi untuk mengatur tampilan elemen header saat menggulir
function handleScroll() {
    if (window.scrollY > nav.offsetHeight) {
        // Atur elemen header dengan posisi tetap di atas
        header.style.top = `-${nav.offsetHeight}px`;
    } else {
        // Atur elemen header kembali ke posisi awal
        header.style.top = "0";
    }
}

// Tambahkan event listener saat menggulir halaman
window.addEventListener("scroll", handleScroll);
