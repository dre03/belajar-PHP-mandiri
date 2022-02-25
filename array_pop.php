<?php 

// fungsi pop bisa diartikan sebagai pengapus data terakhir
    echo "mengapus nama akhir<br>";
    $tims = ["erwin", "ali", "heri", "zaki"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person. "<br>";
    }
?>