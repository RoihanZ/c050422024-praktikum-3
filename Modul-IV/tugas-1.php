<?php
    $lembar = 101;

    if($lembar > 0 && $lembar <= 100){
        $satuan = 150;
        $harga = $lembar * $satuan;
        echo "Anda membeli fotocopy sebanyak ".$lembar." dengan harga 
        ".$satuan." per lembar dengan harga = ".$harga; 
    }
    elseif($lembar > 100 && $lembar <= 200){
        $satuan = 100;
        $harga = $lembar * $satuan;
        echo "Anda membeli fotocopy sebanyak ".$lembar." dengan harga 
        ".$satuan." per lembar dengan harga = ".$harga; 
    }elseif($lembar > 200){
        $satuan = 80;
        $harga = $lembar * $satuan;
        echo "Anda membeli fotocopy sebanyak ".$lembar." dengan harga 
        ".$satuan." per lembar dengan harga = ".$harga; 
    }else{
        echo "Ngapain anda beli ".$lembar." lembar hah??? ";
    }
?>