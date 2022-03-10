<?php
function perkenalan($nama, $sapaan, $nim){ //nama fungsi dengan parameter nama, sapaan, dan nim
    echo $sapaan.", ";
    echo "Nama saya ".$nama;
    echo "<br>";
    echo "NIM saya ".$nim;
}
perkenalan("Layla Mufah Choiriyah", "Halo", "200411100052"); //pemanggilan fungsi
    echo "<hr>";
perkenalan("Zuni", "Hai", "190411100051");
    echo "<hr>";
perkenalan("Dina", "Hei", "210411100004")
?>