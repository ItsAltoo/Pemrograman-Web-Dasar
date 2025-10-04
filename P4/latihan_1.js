const teks = document.getElementById("teks");
const btn = document.getElementById("btn");

btn.addEventListener("click", () => {
    teks.textContent = "teks berhasil diubah"
    teks.style.color = "green"
})