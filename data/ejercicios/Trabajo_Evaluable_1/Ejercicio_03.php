<?php

$array = [1,2,3,4,5,6,7,8,9,10];

foreach($array as $numero) {
    if ($numero % 3 == 0) {
        echo "[" . $numero . "]" . "<br>";
    }
}
   