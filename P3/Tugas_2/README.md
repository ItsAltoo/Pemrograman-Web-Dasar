# Instagram Profile Clone

Sebuah clone halaman profil Instagram yang dibuat menggunakan HTML, CSS, dan framework Tailwind CSS serta Bootstrap. Proyek ini meniru tampilan dan nuansa halaman profil Instagram dengan desain yang responsif dan modern.

## 📸 Preview

Proyek ini menampilkan halaman profil Instagram dengan:
- Foto profil bulat
- Informasi pengguna (nama, bio, statistik)
- Tombol edit profil dan pengaturan
- Area highlight stories
- Grid foto/postingan
- Navigasi tab (Posts, Saved, Tagged)

## 🛠️ Teknologi yang Digunakan

- **HTML5**: Struktur dasar halaman
- **Tailwind CSS**: Framework utility-first untuk styling
- **Bootstrap 5.3.8**: Komponen UI dan grid system
- **Bootstrap Icons**: Icon set untuk elemen UI
- **Google Fonts (Rubik)**: Typography
- **CSS Custom**: Styling tambahan untuk tema gelap

## 📁 Struktur Proyek

```
instagram-profile-clone/
├── index.html          # File utama HTML
├── README.md          # Dokumentasi proyek
└── assets/            # Folder untuk aset (jika ada)
```

## 🚀 Cara Menjalankan

1. **Clone atau download** proyek ini
2. **Buka file `index.html`** di browser web Anda
3. Halaman akan langsung ditampilkan tanpa perlu server khusus

```bash
# Jika menggunakan Git
git clone [repository-url]
cd instagram-profile-clone

# Buka di browser
open index.html
# atau
start index.html
```

## 📱 Fitur Responsif

Proyek ini dioptimalkan untuk berbagai ukuran layar:

- **Desktop**: Layout horizontal dengan foto profil besar
- **Tablet**: Layout yang disesuaikan dengan elemen yang tetap proporsional  
- **Mobile**: Layout vertikal dengan elemen yang terpusat

### Breakpoints yang Digunakan:
- `sm`: 640px ke atas
- `md`: 768px ke atas  
- `lg`: 1024px ke atas

## 🎨 Komponen Utama

### 1. Header Profile
- **Foto Profil**: Gambar bulat responsif (36x36px di mobile, 40vh di desktop)
- **Info Pengguna**: Nama, tombol aksi, dan statistik
- **Tombol**: Edit Profile, Lihat Arsip, dan Settings

### 2. Bio Section
- Nama pengguna
- Deskripsi singkat (Web Developer)

### 3. Highlights Section
- Area untuk Instagram Stories highlights
- Tombol "Baru" untuk menambah highlight

### 4. Navigation Tabs
- Tab Posts (Grid icon)
- Tab Saved (Bookmark icon)  
- Tab Tagged (Person icon)

### 5. Posts Grid
- Grid 3 kolom untuk menampilkan foto
- Gambar yang responsive dan cover penuh
- Gap yang konsisten antar gambar

## 🎯 Kustomisasi

### Mengubah Profil
Untuk mengubah informasi profil, edit bagian berikut di `index.html`:

```html
<!-- Foto Profil -->
<img src="GANTI_URL_FOTO_ANDA" alt="My Profile Picture" />

<!-- Nama Pengguna -->
<h1 class="font-thin text-2xl">NAMA_ANDA</h1>

<!-- Bio -->
<p>NAMA_ANDA</p>
<p>PROFESI_ANDA</p>
```

### Mengubah Postingan
Untuk mengganti gambar postingan, ubah URL pada bagian grid:

```html
<img src="URL_GAMBAR_BARU" alt="Deskripsi Gambar" />
```

### Mengubah Warna Tema
Tema gelap dapat dimodifikasi di bagian CSS:

```css
body {
    background-color: #212121; /* Warna background */
    color: white; /* Warna teks */
}
```

## 📦 Dependencies (CDN)

Proyek ini menggunakan CDN untuk semua dependencies:

- **Tailwind CSS**: `@tailwindcss/browser@4`
- **Bootstrap**: `5.3.8`
- **Bootstrap Icons**: `1.13.1`
- **Google Fonts**: `Rubik font family`

## 🌟 Keunggulan

- ✅ **Fully Responsive** - Bekerja di semua device
- ✅ **Modern Design** - Mengikuti design system Instagram
- ✅ **Dark Theme** - Tema gelap yang nyaman di mata
- ✅ **Fast Loading** - Menggunakan CDN untuk performa optimal
- ✅ **Cross Browser** - Compatible dengan browser modern
- ✅ **Clean Code** - HTML yang terstruktur dan mudah dipahami

## 🔧 Pengembangan Lebih Lanjut

Untuk pengembangan selanjutnya, Anda dapat menambahkan:

- **JavaScript Interactivity**: Modal untuk gambar, like button, comments
- **Backend Integration**: Koneksi dengan database untuk data dinamis
- **Authentication**: Sistem login/register
- **Real Posts**: Upload dan manajemen postingan
- **Stories Feature**: Implementasi Instagram Stories
- **Following System**: Sistem follow/unfollow
