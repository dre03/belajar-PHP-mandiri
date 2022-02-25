<?php 
    $ar_buah = ["pepaya", "mangga", "pisang","jambu"];
    // cetak buah ke index ke 2    
    echo $ar_buah[2];

    //cetak jumlah buah yang ada di data array
    echo "<br/>Jumlah buah : ". count($ar_buah);

    // cetak seluruh data array di atas

    echo "<h3>Daftar buah</h3>";
    echo "<ol>";
    echo "cetak jumlah buah";
    foreach($ar_buah as $buahaja){
        echo "<li>". $buahaja."</li>";
    }
    echo "</ol>";

    //Tambah data array
    $ar_buah[] = "markisa";
    echo "<ol>";
    echo "tambah buah";
    foreach($ar_buah as $tbhbuah){
        echo "<li>". $tbhbuah. "</li>";
    }
    echo "</ol>";

    //hapus data buah index ke 1
    unset($ar_buah[1]);
    echo "<ol>";
    echo "hapus buah index ke satu";
    foreach($ar_buah as $hpsbuah){
        echo "<li>". $hpsbuah. "</li>";
    }
    echo "</ol>";

    // ubah data array pada index ke 2 menjadi manggis
    $ar_buah[2] = "manggis";
    echo "<ol>";
    echo "ubah buah pisang ke buah maggis";
    foreach($ar_buah as $ubhbuah){
        echo "<li>". $ubhbuah. "</li>";
    }
    echo "</ol>";

    // mencetak seluruh data array buah dengan index nya
    echo "<ul>";
    echo "mencetak seluruh data array buah dengan index nya";
    foreach($ar_buah as $k => $v){
        echo "<li> buah index - ". $k. " adalah ". $v ." </li>";
    }
    echo "</ul>";
?>