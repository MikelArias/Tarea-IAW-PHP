<?php
function esCapicua ($numero){
    $numeroinvertido = strrev((string) $numero);
    return (int) $numeroinvertido === $numero;
}
function esPrimo ($numero){
    if ($numero < 2){
        return false;
    }
    for($i=2; $i * $i <= $numero; $i++){
        if($numero % $i === 0){
            return false;
        }
    }
        return true;
}
?>
