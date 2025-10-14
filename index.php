<?php
$nombre="Bernal";
$Curso="Desarrollo Web 4A";
$array_notas=[10,20,30,40,50];
?>
<DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container border_div">
    <h1 class="text-center">Bienvenido <?PHP echo $nombre; ?>, del curso <?PHP echo $Curso; ?> </h1>
</div>
<div class="container border_div">
    <h2 class="text-center text-success">Notas</h2>

    <h3 class="text-center text-info">    <?PHP  echo $array_notas[3];  ?></h3>
        <p class="text-center text-danger">Tu calificacion no es satisfactoria</p >
        
       <?PHP    /* foreach($array_notas as $nota){ ?>
            <li><?PHP echo $nota; ?></li>
        <?PHP }*/ ?>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>