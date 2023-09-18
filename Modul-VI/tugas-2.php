<?php
    $pegawai = array("Chloe", "Marvin", "Eunha", "Charlotte", "Andras", "Stella");
    
    echo "<strong>array_pop </strong><br>";
    $last_pegawai = array_pop($pegawai);
    echo "Hasil pop = $last_pegawai<br><br>";

    
    echo "<strong>array_unshift </strong><br>";
    $last_pegawai = array_unshift($pegawai, "Lily", "Shiro");
    echo "Hasil unshift = $last_pegawai<br><br>";


    $name = array("Chloe", "Eunha", "Lily", "Charlotte", "Ainsword");
    echo "<strong>array_search </strong><br>";
    $key = array_search("Eunha",$name);
    echo "Hasil search = $key<br><br>";

    $rever = array("Chloe", "Eunha", "Lily", "Charlotte", "Ainsword");
    echo "<strong>array_reverse</strong><br>";
    $balik = array_reverse($rever);
    
    foreach($balik as $rever){
        echo $rever . "\n";
    }

    $ambil = array("Chloe", "Eunha", "Lily", "Charlotte", "Ainsword");
    echo "<strong><br>array_slice</strong><br>";
    $slice = array_slice($ambil, 1, 3);
    foreach($slice as $ambil){
        echo $ambil . "\n";
    }
?>