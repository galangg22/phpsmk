<?php

// $nama = array('galang', 'zidna', 'arrauf', 'musarof', 22, 29);
// var_dump ($nama);
// echo '<br>';
// foreach ($nama as $key) {
//     echo $key. '<br>';
// }

$nama = array(
    'galang' => 'surabaya',
    'zidna' => 'sidoarjo'
);

var_dump($nama);
echo '<br>';
foreach ($nama as $key => $value) {
    echo $key. '-' . $value;
    echo '<br>';
}

?>