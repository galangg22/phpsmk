<?php
// OPERATOR MTK


$a= 5;
$b= 2;

$c= $a + $b;
echo $c.'<br>';

$c = $a - $b;
echo $c.'<br>';

$c= $a * $b;
echo $c.'<br>';

$c= $a / $b;
echo floor ($c).'<br>';

$c= $a % $b;
echo $c;

// OPR LOGIKA

$c= $a < $b;
echo $c;

$c= $a > $b;
echo $c;

$c= $a == $b;
echo $c;

$c= $a!= $b;
echo $c.'<br>';

// INCREMENT

$a++;
echo $a.'<br>';

// OPR STRING

$kata= 'sura';
$kota= 'baya';

$hasil= $kata.$kota;

$hasil .= 'kota pahlawan';
echo $hasil;



?>