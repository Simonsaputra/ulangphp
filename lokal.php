<?php
    $x=10;
    $y=10;
    function hasil(){
        $hasil=$x+$y;
        return $hasil;
}
echo "hasil dari penjumlahan". hasil();
echo "<br>";
echo "<hr>";

function lah(){
    $x=5;
    $y=2;
    $hasil=$x+$y;
    echo "hasilnya adalah: " . $hasil;
    echo "<br>";
    echo "<hr>";
}
lah();
?>
<a href="global.php">Variabel Global </a>