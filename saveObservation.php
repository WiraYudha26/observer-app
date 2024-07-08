<?php

if(isset($_POST['proses'])){
    
    // ambil data dari formulir
    $suhu = strval($_POST['suhu']);
    $curahHujan =strval( $_POST['curahHujan']);
    $kecepatanAngin = strval($_POST['kecepatanAngin']);    
    $kelembaban = strval($_POST['kelembaban']);
    $radiasiMatahari = strval($_POST['radiasiMatahari']);
    $arahAngin = strval($_POST['arahAngin']);
    $tekanan = strval($_POST['tekanan'] );
}

// Buat koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "cuaca"; // Ganti dengan nama database Anda

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Persiapkan statement SQL untuk menyimpan data
$sql = "INSERT INTO forecast (Suhu, Kelembaban, Tekanan, Curah_Hujan, Radiasi_Matahari, Kecepatan_Angin, Arah_Angin) VALUES ($suhu, $kelembaban, $tekanan, $curahHujan, $radiasiMatahari, $kecepatanAngin, $arahAngin)";
$query = mysqli_query($conn, $sql);
// Jalankan statement SQL
if( $query ) {
    // kalau berhasil alihkan ke halaman.php
    header('Location: index.php?status=success');
    exit();
} else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
    exit();
}


$conn->close();

// Mengembalikan response dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
