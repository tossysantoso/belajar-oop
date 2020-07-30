<?php
require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("shaun");

echo $sheep->name;
echo "<br>"; // "shaun"
$sheep->set_legs(2);
echo $sheep->get_legs(); // 2
$sheep->set_coldBlooded('false');
echo "<br>";
echo $sheep->get_coldBlooded(); // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

//ape
$sungokong = new Ape("kera sakti");
echo"<br><br>";
echo $sungokong->yell(); // "Auooo"
//echo"<br>";
//$sungokong->set_legs(2);
//echo $sungokong->get_legs();

//frog
$kodok = new Frog("buduk");
echo"<br><br>";
echo $kodok->jump() ; // "hop hop"
?>