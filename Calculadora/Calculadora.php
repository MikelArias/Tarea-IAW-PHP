<?
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$operacion = $_GET["operacion"];
switch ($operacion){
  case "+":
    echo "El resultado es: " . ($numero1 + $numero2);
    break;
  case "-":
    echo "El resultado es: " . ($numero1 - $numero2);
    break;
  case "*":
   echo "El resultado es: " . ($numero1 * $numero2);
   break;
  case "/":
    if($numero1 != 0 && $numero2 != 0){
    echo "El resultado es: " . ($numero1 / $numero2);
    break;
    }
    else{
      echo "No se puede dividir por 0";
      break;
    };
}
?>
