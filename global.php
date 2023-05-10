<?php

$a=8;
$b=5;

echo "angka pertama : " .$a;
echo "<br>";
echo "angka kedua :" . $b;
echo "<br>";

function hasil(){
    global$a;
    global$b;
    $hasil=$a+$b;
    return $hasil;
}
function perkalian(){
    global$a;
    global$b;
    $hasil=$a*$b;
    return $hasil; 
}
echo "hasil dari penjumlahan" . hasil();
echo "<br>";
echo "hasil dari perkalian" . hasil();
echo "<br>";
?>
<a href="lokal.php">Variabel Lokal</a>