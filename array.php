<?php
/**
 * array adalah
 * setiap data punya posisi yg disebut index (start from 0)
 * 
 * variabel -> individu
 * array -> populasi
 */
// $student ="Bill Gates";
// $siswa = ["John Cena","The Rock","Batista","Rey Mysterio"];
// echo $siswa[3];

// array numeric -> array g indexnya berupa numerik
// array assosiative -> array yg indexnya berupa string

// array digunakan saat ada data yang bisa dikelompokan
$person1_nama = "Gopal";
$person1_address = "Madrid";
$person1_age = "40";

$person1 = [ "name" => "Gopal", "address" => "Madrid", "age" => 40];
$person2 = [ "name" => "Kaizo", "address" => "Saturnus", "age" => 80];

$person = [
    [ "name" => "Gopal", "address" => "Madrid", "age" => 40],
   [ "name" => "Kaizo", "address" => "Saturnus", "age" => 80],
   [ "name" => "Kokochi", "address" => "Pluto", "age" => 20],
];

echo $person[2]["address"];
?>