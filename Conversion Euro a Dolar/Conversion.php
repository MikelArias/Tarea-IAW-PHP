<?
$euros = $_GET["euros"];
if (isset($euros)){
  $dolar = $euros * 1.09;
  echo  $dolar ;
}
else{
    echo "No introduciste una cantidad";
}
