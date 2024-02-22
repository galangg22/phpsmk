<?php

// array dimensi

$nama = array ("galang", "zidna", "arrauf", "musarof", 22, 29);

var_dump ($nama);

echo '<br>';

// echo $nama[1];

// echo '<br>';

// for ($i = 0; $i < 6; $i++) {
//     //  echo $i;
//     echo 'no.' . $nama[$i].'<br>';
// }

foreach ($nama as $key => $value) {
     echo $key. '<br>';
    }

?>