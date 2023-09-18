<?php

    $mahasiswa = array("nama"=>"Chloe", "namas"=>"William", "kelas"=>"Jorge", "name"=>"Lily");

    sort($mahasiswa);

    echo "Sort : <br>";
    for($i = 0; $i < count($mahasiswa); $i++){
        echo " + ",$mahasiswa[$i],"<br>";
    }

    asort($mahasiswa);

    echo "Asort : <br>";
    for($i = 0; $i < count($mahasiswa); $i++){
        echo " + ",$mahasiswa[$i],"<br>";
    }

    ksort($mahasiswa);

    echo "Ksort : <br>";
    for($i = 0; $i < count($mahasiswa); $i++){
        echo " + ",$mahasiswa[$i],"<br>";
    }

    rsort($mahasiswa);

    echo "Rsort : <br>";
    for($i = 0; $i < count($mahasiswa); $i++){
        echo " + ",$mahasiswa[$i],"<br>";
    }

    arsort($mahasiswa);
    echo "Arsort : <br>";
    for($i = 0; $i < count($mahasiswa); $i++){
        echo " + ",$mahasiswa[$i],"<br>";
    }

    krsort($mahasiswa);
    echo "Krsort : <br>";
    for($i = 0; $i < count($mahasiswa); $i++){
        echo " + ",$mahasiswa[$i],"<br>";
    }
?>