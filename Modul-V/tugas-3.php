<?php
    $kelipatan = 0;

    for ($i = 3; $i <= 127; $i++){
        if($i % 6 == 0){
            $kelipatan++;
        }
    }
    echo "Bilangan bulat dari 3 s/d 127 yang merupakan kelipatan 6 adalah ".$kelipatan;    
?>