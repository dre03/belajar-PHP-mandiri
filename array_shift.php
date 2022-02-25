<?php 
    
    // fungsi shift bisa di artikan sebagai penghapus data pertama
    $tims = ["ali ", " arya ", "suci ", "nadi ", "mega"];
    echo "ini data sebelum data di hapus menggunakan fungsi array_shift <br>";
    foreach($tims as $person){
        echo $person. "<br>";
    }
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    array_shift($tims);
    echo "ini sesudah fungsi array_shif di jalankan <br>";
    foreach($tims as $person){
        echo $person. "<br>"; 
    }
?>

<?php 
    // Kebalikan dari shift kali ini kita akan belajar unshift
    // fungsi nya yaitu untuk menambahkan data pertama
    $timss = ["ali ", " arya ", "suci ", "nadi ", "mega"];
    echo "<br> menambhakan data pertama<br>";
    array_unshift($timss, "joko", "rigi");
    foreach($timss as $person){
        echo $person. "<br>";
    }
?>