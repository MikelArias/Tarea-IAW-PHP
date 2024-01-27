<?
if (isset($_GET["numero1"]) && isset($_GET["numero2"])){
  echo  $_GET["numero1"] * $_GET["numero2"];
}
else{
    echo "No introduciste numeros";
}
?>