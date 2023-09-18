<?php
    $nilai = 97;
    $grade = '';

    if($nilai >= 90 && $nilai <= 100){
        $grade = 'A';    
    }else if($nilai >= 76 && $nilai <= 89){
        $grade = 'B';
    }else if($nilai >= 60 && $nilai <= 75){
        $grade = 'C';
    }else if($nilai >= 50 && $nilai <= 59){
        $grade = 'D';
    }
    else if($nilai >= 0 && $nilai <= 49){
        $grade = 'E';
    }else{
        $grade = '?';
    }

    switch($grade){
        case 'A' :
            echo "Nilai = $nilai<br>";
            echo "Grade = A<br>";
            echo "Keterangan = Baik Sekali";
            break;
        case 'B' :
            echo "Nilai = $nilai<br>";
            echo "Grade = B<br>";
            echo "Keterangan = Baik";
            break;
        case 'C' :
            echo "Nilai = $nilai<br>";
            echo "Grade = C<br>";
            echo "Keterangan = Cukup";
            break;
        case 'D' :
            echo "Nilai = $nilai<br>";
            echo "Grade = D<br>";
            echo "Keterangan = Hampir Cukup";
            break;
        case 'E' :
            echo "Nilai = $nilai<br>";
            echo "Grade = E<br>";
            echo "Keterangan = Kurang";
            break;
        case '?' :
            echo "Nilai = $nilai<br>";
            echo "Grade = ?<br>";
            echo "Keterangan = Whaaaat";
            break;
    }
    
?>