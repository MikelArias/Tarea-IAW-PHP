<?php
function generaArrayInt($n) {
    $array = [];
    
    for ($i = 0; $i < $n; $i++) {
        $array[] = rand(0, 100); // Genera un número aleatorio entre 0 y 100
    }
    
    return $array;
}
function minimoArrayInt($array) {
    return min($array); // Devuelve el valor mínimo del array
}
function maximoArrayInt($array) {
    return max($array); // Devuelve el valor máximo del array
}
?>