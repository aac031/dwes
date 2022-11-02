<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Bienvenida</title>
</head>
<body>
  <?php
  require('views/header.php');
  ?>
  <h1>Bienvenido a <?= $this->name ?></h1>
 </body>
</html>