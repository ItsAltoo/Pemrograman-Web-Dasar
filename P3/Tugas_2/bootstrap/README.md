# Proyek Tampilan Profil Instagram

Proyek ini adalah sebuah halaman web statis yang mereplikasi tampilan halaman profil Instagram. Tujuannya adalah untuk mendemonstrasikan penggunaan **HTML** dan **Bootstrap 5** dalam membangun antarmuka pengguna (UI) yang responsif dan modern.

## 🚀 Penggunaan Bootstrap dalam Proyek Ini

Bootstrap adalah framework CSS yang kuat untuk membangun desain web yang responsif dan *mobile-first*. Dalam proyek ini, Bootstrap dimanfaatkan secara ekstensif untuk mengatur tata letak, komponen, dan utilitas lainnya. Berikut adalah rincian penggunaannya:

### 1\. Sistem Grid dan Tata Letak (Grid System & Layout)

Sistem grid adalah fondasi dari tata letak halaman. Bootstrap memudahkan pembuatan layout yang kompleks dan responsif.

  - **Container**: `class="container"` digunakan sebagai pembungkus utama untuk membatasi lebar konten dan memberikan padding horizontal secara otomatis. Properti `max-width: 975px` ditambahkan untuk meniru lebar maksimal halaman profil Instagram.
  - **Grid Foto**: Untuk menampilkan galeri foto, digunakan sistem `row` dan `col`. `class="row"` menciptakan baris, dan `class="col-4"` membagi baris tersebut menjadi tiga kolom yang sama lebarnya (karena 12 / 4 = 3).
  - **Gutter**: `class="g-1 g-md-3"` digunakan pada `row` untuk mengatur jarak (gutter) antar kolom. Jaraknya lebih kecil di perangkat mobile (`g-1`) dan lebih besar di desktop (`g-md-3`).

**Contoh Kode:**

```html
<div class="row g-1 g-md-3 mt-4">
  <div class="col-4">
    <img src="..." alt="..." class="grid-image" />
  </div>
  <div class="col-4">
    <img src="..." alt="..." class="grid-image" />
  </div>
  <div class="col-4">
    <img src="..." alt="..." class="grid-image" />
  </div>
</div>
```

-----

### 2\. Utilitas Flexbox (Flexbox Utilities)

Flexbox digunakan untuk mengatur tata letak dan perataan item di dalam sebuah kontainer. Bagian header profil sangat bergantung pada utilitas ini.

  - **Membuat Flex Container**: `class="d-flex"` mengubah sebuah elemen menjadi *flex container*.
  - **Arah Responsif**: `class="flex-column flex-md-row"` membuat item tersusun vertikal di layar kecil (`flex-column`) dan berubah menjadi horizontal di layar medium ke atas (`flex-md-row`).
  - **Perataan (Alignment)**:
      - `align-items-center`: Menyelaraskan item secara vertikal di tengah.
      - `justify-content-center`: Menyelaraskan item secara horizontal di tengah.
      - `justify-content-md-start`: Mengubah perataan horizontal menjadi ke kiri pada layar medium ke atas.

**Contoh Kode:**

```html
<div class="d-flex flex-column flex-md-row align-items-center gap-4 gap-md-5">
  </div>
```

-----

### 3\. Komponen dan Utilitas Bentuk (Components & Shape Utilities)

Bootstrap menyediakan komponen siap pakai seperti tombol, yang mempercepat proses pengembangan.

  - **Tombol (Buttons)**: `class="btn"` digunakan untuk membuat tombol. Kelas tambahan seperti `btn-secondary` memberikan warna, dan `btn-sm` mengatur ukurannya menjadi kecil.
  - **Bentuk (Shapes)**: `class="rounded-circle"` digunakan pada gambar profil untuk membuatnya menjadi lingkaran sempurna.

**Contoh Kode:**

```html
<button class="btn btn-secondary btn-sm">Edit Profile</button>
<img class="rounded-circle profile-pic" src="..." alt="My Profile Picture" />
```

-----

### 4\. Utilitas Spasi dan Ukuran (Spacing & Sizing Utilities)

Bootstrap menawarkan kelas utilitas untuk mengatur margin, padding, dan ukuran dengan cepat.

  - **Margin & Padding**: `my-5` berarti "margin pada sumbu y (atas dan bawah) dengan ukuran 5". `mt-4` berarti "margin-top dengan ukuran 4".
  - **Gap**: `class="gap-3"` memberikan jarak antar item di dalam kontainer flex atau grid.
  - **Lebar (Width)**: `class="w-100"` mengatur lebar elemen menjadi 100% dari parent-nya.

-----

### 5\. Tipografi dan Teks (Typography & Text)

Kelas-kelas ini digunakan untuk mengatur tampilan teks.

  - **Ketebalan Font**: `fw-light` untuk teks tipis dan `fw-semibold` untuk teks agak tebal.
  - **Ukuran Font**: `fs-4` mengatur ukuran font.
  - **Warna & Dekorasi**: `text-light`, `text-secondary`, dan `text-decoration-none` digunakan untuk mengatur warna dan menghilangkan garis bawah pada link.

-----

### 6\. Bootstrap Icons

Proyek ini juga menggunakan **Bootstrap Icons**, sebuah pustaka ikon SVG gratis. Ikon-ikon ini diimpor melalui CDN terpisah dan digunakan dengan tag `<i>` seperti pada contoh di bawah.

**Contoh Kode:**

```html
<i class="bi bi-gear fs-4"></i>
<i class="bi bi-grid-3x3"></i>
```

### Kesimpulan

Dengan memanfaatkan kelas-kelas utilitas Bootstrap, proyek ini berhasil menciptakan tampilan yang kompleks dan responsif dengan kode HTML yang bersih dan minimalis, serta mengurangi kebutuhan untuk menulis banyak CSS kustom.