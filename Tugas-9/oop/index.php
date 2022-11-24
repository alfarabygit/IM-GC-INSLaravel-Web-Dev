<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';
$sheep = new Animal("shaun");

echo "Name: " . $sheep->name; // "shaun"
echo "Legs: " . $sheep->legs; // 4
echo "cold blooded: " . $sheep->cold_blooded; // "no"
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->name; // "buduk"
echo "Legs: " . $kodok->legs; // 4
echo "cold blooded: " . $kodok->cold_blooded; // "no"
echo "Jump: ";
$kodok->jump(); // "hop hop"

echo "<br><br>";

$sungokong = new Ape("kera sakti", 2);
echo "Name: " . $sungokong->name; // "kera sakti"
echo "Legs: " . $sungokong->legs; // 2
echo "cold blooded: " . $sungokong->cold_blooded; // "no"
echo "Yell: ";
$sungokong->yell(); // "Auooo"
