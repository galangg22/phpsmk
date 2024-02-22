<?php

    for ($i=1; $i <= 10; $i++) {
        echo $i;
    }

    echo '<br>';

    for ($i=1; $i <= 12; $i=$i+2) {
        echo $i;
    }

    echo '<br>';

    for ($i=15; $i >= 1; $i--) {
        echo $i. ' prei cak, ';
    }

    echo '<br>';

    for ($i=24; $i >= 0; $i=$i-3) {
        echo $i. ' asek, ';
    }

    echo '<br>';

    $a = 1;
    do {
        echo $a. ',  ';
        $a++;
    }while ($a <= 100);



?>