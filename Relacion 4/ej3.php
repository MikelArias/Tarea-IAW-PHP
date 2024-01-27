<?php
include "funciones.php";
for ($num = 0; $num <= 9999; $num++) {
   if (esPrimo($num)) {
       echo $num . " es Primo. \n" ;
   }
}
?>