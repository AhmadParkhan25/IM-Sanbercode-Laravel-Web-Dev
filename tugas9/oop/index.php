<?php

$file =['animal.php', 'Ape.php', 'Frog.php'];
foreach($file as $files){
    require_once $files;
}



$sheep = new Animal("shaun");

echo "Name : $sheep->name <br>"; // "shaun"
echo "legs : $sheep->legs <br>"; // 4
echo "cold blooded : $sheep->cold_blooded <br><br>"; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
$kodok = new Frog("buduk");
echo "Name : $kodok->name <br>"; 
echo "legs : $kodok->legs <br>"; 
echo "cold blooded : $kodok->cold_blooded <br>";
$kodok->jump() ; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "Name : $sungokong->name <br>"; 
echo "legs : $sungokong->legs <br>"; 
echo "cold blooded : $sungokong->cold_blooded <br>";
$sungokong->yell(); // "Auooo"




?>