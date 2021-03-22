<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Logika</title>
    <style>
        body {
            font-family: monaco;
            background-color: #0984e3;
            background-size: cover;
        }

        .container {
            width: 300px;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            background-color: wheat;
            display: flex;
            margin: auto;
            border-radius: 20px;
        }

        .hitung {
            margin-left: 100px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="hitung.php" method="post">
            <label>Masukan Nilai</label>&nbsp;&nbsp;<input name="nilai" type="text"><br>
            <input class="hitung" type="submit" value="Hitung"><br><br>

            <label>Hasil</label>&nbsp;&nbsp;<input name="hasil" type="text" disabled value="<?php if (isset($_GET['hasil'])) echo $_GET['hasil'] ?>" />
        </form>
    </div>
</body>

</html>
