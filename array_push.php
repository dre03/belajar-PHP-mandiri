<?php 

    // push berfungsi utuk menambahkan data
    $tims = ["udin", "dea", "ali", "boby"];
    echo "push berfungsi utuk menambahkan data <br>";
    array_push($tims, "wati");
    foreach($tims as $person){
        echo $person."<br>";
    }
?>