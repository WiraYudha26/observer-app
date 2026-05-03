# 🌤️ Observer App
## 📋 Deskripsi Proyek
**Observer App** adalah aplikasi berbasis web yang memungkinkan pengguna memasukkan data observasi cuaca secara manual (suhu, kelembaban, tekanan, curah hujan, dll) kemudian disimpan ke tabel `forecast` dalam database MySQL. Aplikasi ini menggunakan PHP native + MySQL dengan tampilan yang sederhana namun fungsional.

## ✨ Fitur
- Form input data observasi cuaca
- Penyimpanan data ke MySQL
- Notifikasi berhasil/gagal
- Background dan logo BMKG
- Desain responsif sederhana

## 🛠️ Tools
- Backend: PHP 8
- Database: MySQL
- Frontend: HTML, CSS, JavaScript
- Web Server: XAMPP

## 📁 Struktur Folder
observer-app/

├── index.php (Halaman utama + form input)

├── saveObservation.php (Proses penyimpanan data)

├── script.js (Javascript)                 

├── forecast.sql (Skema database)

├── BMKG-Logo.png

├── weather1.jpg

└── README.md

## 🗄️ Database

**Nama Database**: `cuaca`

**Tabel**: `forecast`

```sql
CREATE TABLE `forecast` (
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Suhu` decimal(10,1) DEFAULT NULL,
  `Kelembaban` decimal(10,1) DEFAULT NULL,
  `Tekanan` decimal(10,1) DEFAULT NULL,
  `Curah_Hujan` decimal(10,1) DEFAULT NULL,
  `Radiasi_Matahari` decimal(10,1) DEFAULT NULL,
  `Kecepatan_Angin` decimal(10,1) DEFAULT NULL,
  `Arah_Angin` decimal(10,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

## 🚀 Cara Instalasi & Penggunaan

1. Clone / Download repository ini
2. Import database
   - Buat database bernama cuaca
   - Import file forecast.sql
3. Letakkan folder ke dalam htdocs (XAMPP) atau root web server kamu
   - Jalankan
   - Buka browser, akses: http://localhost/observer-app
4. Isi form dan klik Simpan🛠️ Tools yang Digunakan

## ⚠️ Catatan Penting
- Saat ini script.js belum terintegrasi dengan form (form menggunakan submit biasa via PHP).
- Koneksi database menggunakan root dengan password kosong (sesuaikan di saveObservation.php jika perlu).
- Background gambar (weather1.jpg) dan logo (BMKG-Logo.png) sudah disertakan, boleh diganti sesuai selera.
