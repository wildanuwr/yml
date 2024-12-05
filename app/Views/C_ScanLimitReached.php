<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Limit Reached</title>
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
            padding: 20px;
            text-align: center;
            width: 400px;
        }

        .container img {
            width: 100px;
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
            background-color: #ff4f4f;
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
        <!-- Icon Warning -->
        <img src="<?= base_url('img/')?>warning.png" alt="Warning Icon">

        <!-- Title -->
        <h1>Produk telah melewati batas scan (5/5)</h1>

        <!-- Description -->
        <p>Produk yang anda scan tidak dapat kami proses karena melewati batas scan.</p>
        <p>Periksa kembali produk anda atau tanyakan ke penjual stok yang lain atau laporkan</p>

        <!-- Button -->
        <a href="#" class="btn-lapor">Lapor</a>
    </div>
</body>
</html>
