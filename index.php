<?php
$statusMessage = '';
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    $statusMessage = "<div class='notification success'>Data berhasil disimpan!</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengisian Data Cuaca</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('weather1.jpg');
            background-size: cover; /* Membuat gambar menutupi seluruh halaman */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center; /* Posisi horizontal tengah */
            align-items: center; /* Posisi vertikal tengah */
            height: 100vh; /* Menggunakan seluruh tinggi viewport */
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8); /* Warna putih dengan sedikit transparansi */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            position: relative;
            text-align: center; /* Pusatkan konten dalam form-container */
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            vertical-align: top;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .data-container {
            margin-top: 20px; /* Sesuaikan dengan jarak yang diinginkan */
            text-align: center;
        }

        /* Gaya khusus untuk logo BMKG */
        .bmkg-logo {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 100px; /* Sesuaikan dengan ukuran logo */
            height: auto;
        }

        .notification {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .success {
            color: #3c763d;
            background-color: rgba(223, 240, 216, 0.8); /* Transparansi disesuaikan */
            border-color: #d6e9c6;
        }
    </style>
</head>
<body>

<div class="form-container">
    <img src="BMKG-Logo.png" alt="BMKG Logo" class="bmkg-logo">
    <h2>Formulir Pengisian Data Cuaca</h2>
    <form id="weatherForm" action="saveObservation.php" method="POST">
        <table>
            <tr>
                <td>Suhu (°C)</td>
                <td><input type="number" id="suhu" name="suhu" required step="0.1"></td>
                <td>Curah Hujan (mm)</td>
                <td><input type="number" id="curahHujan" name="curahHujan" required step="0.1"></td>
                <td>Kecepatan Angin (km/h)</td>
                <td><input type="number" id="kecepatanAngin" name="kecepatanAngin" required step="0.1"></td>
            </tr>
            <tr>
                <td>Kelembaban (%)</td>
                <td><input type="number" id="kelembaban" name="kelembaban" required step="0.1"></td>
                <td>Radiasi Matahari (W/m²)</td>
                <td><input type="number" id="radiasiMatahari" name="radiasiMatahari" required step="0.1"></td>
                <td>Arah Angin (derajat)</td>
                <td><input type="number" id="arahAngin" name="arahAngin" required step="0.1"></td>
            </tr>
            <tr>
                <td>Tekanan (Pa)</td>
                <td><input type="number" id="tekanan" name="tekanan" required step="0.1"></td>
            </tr>
        </table>
        <div class="button-container">
            <input type="submit" value="Simpan" name="proses">
        </div>
        <?php echo $statusMessage; ?>
    </form>

<script src="script.js"></script>
</body>
</html>
