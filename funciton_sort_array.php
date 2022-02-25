<?php 
$ar_buah = ["p" => "pepaya", "a" => "apel", "m" => "mangga", "j" => "jambu"];
echo "<ol>";
foreach($ar_buah as $k => $v){
    echo "<li>". $k. " - ". $v. "</li>";
}

// menurutkan data dari yang terkecil ke yan terbesar
echo "<ol>";
echo "<br/>menurutkan data dari yang terkecil ke yan terbesar";
sort($ar_buah);
foreach($ar_buah as $k => $v){
    echo "<li>". $k. " - ". $v. "</li>";
}
echo "</ol>";


echo "<ol>";
echo "<br/>kebalikan nya";
arsort($ar_buah);
foreach($ar_buah as $k => $v){
    echo "<li>". $k. " - ". $v. "</li>";
}
echo "</ol>";
?>