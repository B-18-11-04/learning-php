<?php
// menghitung luas dan keliling lingkaran
/*
algoritma :
1. memasukkan nilai jari-jari
2. menetapkan nilai phi
3. hitung luas -> rumus luas
4. hitung keliling -> rumus keliling
4. tampil nilai luas dan keliling
*/

// membuat variabel -> r, phi, luas, keliling
$r = 10;
$phi = 3.14;
$luas = $r * $r * $phi;
$keliling = $phi * 2 * $r;
// echo "Hello World";
echo "Luas Lingkaran: $luas";
echo "Keliling Lingkaran: $keliling";
?>