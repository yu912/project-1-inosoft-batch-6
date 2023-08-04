<?php
function luas_lingkaran($jari_jari)
{
    $luas = 3.14 * $jari_jari * $jari_jari;
    return number_format($luas, 2);
}

function keliling_lingkaran($jari_jari)
{
    $keliling = 2 * 3.14 * $jari_jari;
    return number_format($keliling, 2);
}

function luas_persegi($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return number_format($luas, 2);
}

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 === 0 && $angka % 5 === 0) {
        $luas = luas_persegi($angka / 3, $angka / 5);
        echo $luas . PHP_EOL;
    } elseif ($angka % 3 === 0) {
        $jari_jari = $angka / 3;
        $luas = luas_lingkaran($jari_jari);
        echo $luas . PHP_EOL;
    } elseif ($angka % 5 === 0) {
        $jari_jari = $angka / 5;
        $keliling = keliling_lingkaran($jari_jari);
        echo $keliling . PHP_EOL;
    } else {
        echo number_format($angka, 2) . PHP_EOL;
    }
}
?>
