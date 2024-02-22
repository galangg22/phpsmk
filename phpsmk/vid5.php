<?php

$tanggal = 18;
// $hasil = $tanggal > 0;

if ($tanggal < 32){

    if($tanggal > 0){
        echo "benar";
    }else{
        echo "salahhh";
    }
}else{
    echo "salahh";
}
echo "<br>";
$nilai = 100;

if ($nilai <= 100) {
    if ($nilai > 0 ){
        echo "nilai anda benar";
    }else{
        echo "nilai salah";
    }
}else{
    echo "nilai slah";
}

echo "<br>";

$Nilai = 122;

if ($nilai > 0 && $Nilai <=100) {
    echo "accepted";
}else {
    echo "denied";
}

echo "<br>";

$nilaI = 0;

if ($nilaI >=100 || $nilaI<=0) {
    echo "salah blok";
}else {
    echo "ngeri bener";
}
?>