<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika</title>
</head>

<body>
    <?php

    $nilai = 91;

    echo "Nilai: {$nilai} = ";

    if ($nilai >= 90 and $nilai <= 100) {
        echo "Terpuji";
    } elseif ($nilai >= 80) {
        echo "Sangat Memuaskan";
    } elseif ($nilai >= 60) {
        echo "Memuaskan";
    } elseif ($nilai >= 50) {
        echo "Tidak Lulus";
    } elseif ($nilai >= 0) {
        echo "Tidak Lulus";
    } else {
        echo "Nilai tidak valid.";
    }  ?>
    <br>
    <?php echo "Runingnya di File php nya ya kaka" ?>
</body>

</html>