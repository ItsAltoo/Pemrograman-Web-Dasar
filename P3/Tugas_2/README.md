
# Proyek Halaman Profil

Ini adalah halaman profil sederhana yang dibuat menggunakan HTML, dengan menggabungkan berbagai perangkat dan kerangka kerja pengembangan web modern.

## Teknologi yang Digunakan

  - HTML5
  - TailwindCSS (melalui CDN)
  - Bootstrap 5.3.8
  - Google Fonts (Rubik)
  - Material Symbols (untuk ikon)

-----

## Fitur

### 1\. Bagian Profil

  - Tampilan foto profil berbentuk lingkaran besar
  - Tampilan nama pengguna ("Malik")
  - Tombol interaktif:
      - Tombol Edit Profil
      - Tombol Lihat Arsip
      - Tombol Pengaturan dengan ikon Material

### 2\. Gaya (Styling)

  - Tema gelap dengan:
      - Warna latar belakang: `#212121`
      - Teks berwarna putih untuk kontras
  - Font kustom: Rubik (Google Fonts)
  - Tata letak responsif menggunakan Flexbox
  - Tombol Bootstrap dengan gaya sekunder
  - Integrasi Material Icons untuk ikon pengaturan

### 3\. Tata Letak (Layout)

  - Tata letak berbasis Flexbox untuk desain responsif
  - Perataan konten di tengah
  - Jarak (*gap*) antar elemen untuk tampilan yang rapi
  - Gambar profil lingkaran menggunakan kelas `rounded-circle` dari Bootstrap

-----

## Dependensi

```html
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
/>

<link
  href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
  rel="stylesheet"
/>

<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=settings"
/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
```

-----

## Gaya Kustom

Halaman ini menggunakan tema gelap kustom yang diterapkan melalui CSS:

```css
body {
  font-family: "Rubik", sans-serif;
  background-color: #212121;
  color: white;
}
```

-----

## Desain Responsif

Tata letaknya dibangun menggunakan properti Flexbox untuk memastikan perataan dan jarak yang tepat:

  - Kontainer fleksibel dengan konten di tengah
  - Jarak (*gap*) yang responsif
  - Perataan teks dan tombol yang sesuai
