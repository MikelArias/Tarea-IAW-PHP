<?php
include "funciones.php";

for ($num = 1; $num <= 10000; $num++) {
    if (esCapicua($num)) {
        echo $num . " es capicua. \n" ;
    }
}

?>