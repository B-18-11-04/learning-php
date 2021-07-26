<?php
/**
 * looping (perulangan)
 * 
 * type of looping -> for, while, do.. while
 * 
 * Syarat sah looping:
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisinya benar looping  akan berlanjut
 * saat kondisi salah, looping akan berhenti
 */

  // case: menampilkan bilangan kelipatan 7 mulai dari -70 sampai 100
 // $start = -70;
 // for ($i=$start; $i < 100 ; $i+=7) {
 //   echo "$i ";
 // }

 // case 2
 $person = [
    [ "name" => "Gopal", "address" => "Madrid", "age" => 40],
    [ "name" => "Kaizo", "address" => "Saturnus", "age" => 80],
    [ "name" => "Kokochi", "address" => "Pluto", "age" => 20],
];
// String nama = "Jack";
// syste,.out.println(Nama saya: +nama);
// tanda titik digunakan utk menggabung antara 1 string dengan string yang lainnya
echo $person[0]['name']." ".$person[0]['address']." ".$person[0]['age']." | ";
echo $person[0]['name']." ".$person[0]['address']." ".$person[0]['age']." | ";
echo $person[0]['name']." ".$person[0]['address']." ".$person[0]['age']." | ";
// // menampilkan isi dalam array person
# count digunakan untuk mengetahui jumlah array (java -> .length())
for ($i=0; $i < count($person); $i++) {
    echo $person[$i]['name']." ".$person[$i][address]." ".$person[$i][age]." | ";
}

?>