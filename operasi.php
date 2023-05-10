<?php
    $nama="Simon";
    $umur="15";

    $pesan="Halo nama ana adalah ($nama) umur ana ($umur)";
    echo $pesan;
    echo "<br>";
    echo "<br>";

    $menyambut="selamat datang {$nama}";
    echo $menyambut; 
    echo "<br>";
    echo "<hr>";
    
    $nama1 = "Simon ";
    $nama2 = "Saputra";
    $namalengkap = $nama1.$nama2;
    echo $namalengkap;
    echo "<br>";
    echo "<hr>";

    $i=8;
    echo "jumlah" . $i+7;
    echo "<br>";
    echo "<hr>";

    $hadits=  "أُطْلُبُوا الْعِلْمَ مِنَ الْمَهْدِ اِلىَ اللَّهْدِ

    Utlubul ilma minal mahdi ilal lahdi.
    
    Artinya: “Tuntutlah ilmu dari buaian sampai ke liang lahat, Ibnu Abdil Barr";

    echo "<p>$hadits</p>";
    echo "Panjang karakter:" . strlen($hadits) . "<br>";
    echo "jumlah kata:" . str_word_count($hadits) . "</br>";
    echo "<p>" . substr($hadits,20,30). "</p>"; //memotong 
    echo "<p>" . strtolower($hadits) . "</p>"; //membuat huruf kecil
    echo "<hr>";

    $judulBerita = "Yanti dan Yanto";
    echo "judul asli: ($judulBerita) <br>";
    echo "judul baru: " . str_replace("membeli","menjual",$judulBerita)

?>      