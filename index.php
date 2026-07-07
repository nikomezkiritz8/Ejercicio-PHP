<?php

$mivariable= "Koila";
$num = 2;
$num1 = 5;
$resultado= $num * $num1;

$nombre = "Koila";
$apellido = "Drebot";

$nombreCompleto = $nombre . " - ". $apellido;

$texto = "Hola me llamo $nombre $apellido, y soy alumno de Igor,  que es profe de programación en Area escuela.";
$texto2 = 'Al ser comillas simples, no puedo meter las variables dento de este string; estoy obligado a concatenar el valor de la variable $nombre: ' .$nombre ." - " . $apellido .' fuera del string para poder imprimirla' ;

$boton = '<a href="#" class="boton">Púlsame</a>';

/* esto es un comentario de bloque  */

// esto es un comentario de línea 

# otro comentario de línea

// constantes en php

define( "IVA", 21);

const IVA2 = 10;

// incrementales

$contador = 89;
$contador++;

// condicionales

if($contador >=5){
    $mensaje ="Es igual o mayor que 5 ($contador)";
}

else{
    $mensaje = "Es menor que 5 ($contador)";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="...">
    <title>Document</title>

    <style>

        .boton{
            font-family:Arial;
            background-color: aqua;
            color: red;
            border-radius: 4px;
            font-size: 1.1rem;
            padding: 4px;
        }     
        
    </style>
</head>
<body>
    <h1> <?php echo $nombreCompleto ?></h1>
    <p> RESULATDO:<?= $resultado ?></p>
    <p><?= $texto ?></p>
    <p><?= $texto2 ?></p>
    <?= $boton ?>

    <p><?= IVA ?></p>

    <p><?= $mensaje ?></p>
</body>
</html>