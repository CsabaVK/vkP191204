<?php


    $tomb20 = [];
    for ($i=0; $i < 20; $i++) { 
        $kistomb = [];
        
        for ($j=0; $j < 3; $j++) { 
            //$randomnumber = mt_rand(1, 6);
            $kistomb[] = mt_rand(1, 6);
        }
        $tomb20[] = $kistomb;
        
    }
    echo "<pre>";
    print_r($tomb20);
    echo "</pre>";

?>