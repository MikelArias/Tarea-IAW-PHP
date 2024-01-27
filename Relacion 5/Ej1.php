<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Ejercicio 1</title>
</head>
<?php
session_start();
?>
<body>
  Introduce un nombre:
  <form action="comprobacion.php" method="post">
   <input type="text" name="name"> <br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>