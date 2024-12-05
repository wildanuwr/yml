<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Tidak Ditemukan</title>
    <link rel="icon" href="<?= base_url('img/favicon.ico'); ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            margin-top: 20px;
            background-color: #fff;
            padding: 30px;
            text-align: center;
            width: 450px;
        }

        .container img {
            height: auto;
            width: 150px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
        }

        p {
            font-size: 12px;
            color: #979797;
            margin-bottom: 15px;
        }

        .warning-text {
            color: #ff4f4f;
            font-weight: bold;
        }

        .btn-lapor {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px;
            font-size: 16px;
            border-radius: 3px;
            width: 100%;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-lapor:hover {
            background-color: #d64545;
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Icon Box with Question Mark -->
        <img src="img/notfound.svg" alt="Not Found Icon">

        <!-- Title -->
        <h1>Barang tidak ditemukan</h1>

        <!-- Description -->
        <p>Produk yang anda scan tidak dapat kami temukan atau tidak valid.</p>
        <p>Tanyakan ke penjual stok yang lain atau laporkan</p>

        <!-- Button -->
        <a href="#" class="btn-lapor">Lapor</a>
    </div>
</body>
</html>
