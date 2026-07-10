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

$edad = null;
$edad = 40;

if($edad === 30){
    echo "Su edad es 30 <br>";
}

if($edad !== 30){
    echo "No es igual a 30 por su valor <br>";
}

// operadores

if(($edad >= 30 && $contador >= 5) || $contador === 6){
    echo "Se cumplen alguna de estas condiciones <br>";
}

// condicionales elseif

$nota = 3;

if($nota >= 5){
    echo "Aprobado <br>";
}

elseif($nota < 5 && $nota != null){
    echo "Suspenso";
}

else{
    echo "No presentado";
}

// condicional antiguo y moderno para operaciones simples

if($edad >= 18) {
    $mensaje = "Mayor";
}

else{
    $mensaje = "Menor";
}

echo $mensaje . "<br>";

// alternativa moderna

$mensaje = $edad >=18

    ? "Mayor"
    : "Menor";

echo $mensaje . "<br>";

// variables con query param obtenidas de la URL a través de "url?nombre=xxx"

if (isset($_GET['nombre']) && isset ($_GET['apellido'])){
    $nombreRecogido = $_GET['nombre'];
    $apellidoRecogido = $_GET ['apellido'];

}

// alternativa Null Coalescing

$nombreRecogido = $_GET['nombre'] ?? $_GET['nombre'];
$apellidoRecogido = $_GET['apellido'] ?? $_GET['apellido'];


// función con parámetros y tipado
function sumar(int $a, int $b): int{
    return $a + $b;
}

echo sumar(2, 5) . "<br>"; // 7

// -----------------------------------------------------------------------------

// Ejercicios de la clase 89

echo "Ejercicios de la clase 89: <br>";

// ejercicio 1

$minombre = "Niko Mezkiritz";

echo "Mi nombre es: " . $minombre;

// ejercicio 2

$num1 = 5;
$num2 = 10;

$resultadoSuma = $num1 + $num2;
$resultadoResta = $num1 - $num2;
$resultadoMulti = $num1 * $num2;
$resultadoDivi = $num1 / $num2;

// ejercicio 3

$edad = 24;

if($edad >=18){
    $comentario = "Es mayor de edad";
}
else{

    $comentario = "Es menor de edad";
}

// ejercicio 6

$ciudades = ["Donostia" , "Bilbao", "Baiona", "Elizondo", "Gasteiz"];

// ejercicio 7

$persona = [
    "nombre" => "Niko",
    "apellido" => "Mezkiritz",
    "telefono" => "638141964",
    "ciudad" => "Elizondo",
    "edad" => 27

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="...">
    <title>Document</title>

    <style>

        *{
            padding: 0;
            margin: 0;
            top: 0;
            box-sizing: border-box;
        }

        .boton{
            font-family:Arial;
            background-color: red;
            color: black;
            border-radius: 4px;
            font-size: 1.1rem;
            padding: 4px;
        } 

        .contenedor{
            width: 100%;
            padding: 2rem;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            gap:2rem;
        }

        table{
            width: 500px;
        }

        tr, td{
            border: 1px solid black;
        }




        
    </style>
</head>
<body>
    <h1> <?php echo $nombreCompleto ?></h1>
    <p> RESULTADO:<?= $resultado ?></p>
    <p><?= $texto ?></p>
    <p><?= $texto2 ?></p>
    <?= $boton ?>

    <p><?= IVA ?></p>

    <p><?= $mensaje ?></p>

    <div class = "contenedor" id= #zonaBotones >
        <a href="/?nombre=Igor&apellido=Aranaz #zonaBotones" class="boton">Igor Aranaz</a>
        <a href="/?nombre=Erika&apellido=De Santiago #zonaBotones" class="boton">Erika De Santiago</a>
        <a href="/?nombre=Niko&apellido=Mezkiritz #zonaBotones" class="boton">Niko Mezkiritz</a>
        <a href="/?nombre=Arkady&apellido=Krutius #zonaBotones" class="boton">Arkady Krutius</a>
        <a href="/?nombre=Ekaterina&apellido=Goncharova #zonaBotones" class="boton">Ekaterina Goncharova</a>
        <a href="/?nombre=Mauricio&apellido=Mahecha #zonaBotones" class="boton">Mauricio Mahecha</a>
        <a href="/?nombre=Fabian&apellido=Mongrut #zonaBotones" class="boton">Fabian Mongrut</a>
        <a href="/?nombre=Noelia&apellido=Valverde #zonaBotones" class="boton">Noelia Valverde</a>
    </div>

    <p>Nombre seleccionado: <?= "El nombre seleccionado es $nombreRecogido $apellidoRecogido"; ?></p>

    <?php
    // Condicionar el html desde el propio php allí donde toque el html
    if(isset($nombreRecogido) && isset($apellidoRecogido)){

        echo <<< HTML

        <p>Nombre seleccionado: El nombre es  $nombreRecogido $apellidoRecogido </p>

        HTML;

        // forma echo habitual (antiguo) de asignar un echo a un html desde php
        echo "<p>Nombre seleccionado: El nombre es  $nombreRecogido $apellidoRecogido </p>";

    }

    ?>

    <!-- Condicionar html desde php  -->

    <?php

    if(isset($nombreRecogido) && isset($apellidoRecogido)){
    ?>

        <p>Nombre seleccionado: El nombre es <?= $nombreRecogido . "" . $apellidoRecogido ?></p>
    <?php

    }

    ?>

    <h2>Ejercicios de la clase 89: </h2>
    <p> 1) Este es mi nombre: <?= $minombre ?> </p>
    <p> 2) operaciones matemáticas</p>
    <p>los números son el 5 y el 10</p>
    <ul>
        <li>Suma: <?= $resultadoSuma ?></li>
        <li>Resta: <?= $resultadoResta ?></li>
        <li>Multiplicacion: <?= $resultadoMulti ?></li>
        <li>Division: <?= $resultadoDivi ?></li>
    </ul>

    <p>3) mostrar mensaje de edad</p>
    <p><?= $comentario ?></p>

    <p>4) Ejercicio de iteracion</p>

    <?php

    for($i=1; $i<= 20; $i++){
        echo <<<HTML

        <p>$i</p>

        HTML;
    };

    ?>

    <p>5) Ejercicio de iteración solo con numeros pares</p>

    <?php

    for($i=1; $i<=20; $i++){
        if($i % 2 == 0){
            echo <<<HTML
            <p>$i</p>
            HTML;
        }
    };
    
    ?>

    <p>6) Mostrar ciudades del array</p>

    <table>
        <tr>
            <td>Numero</td>
            <td>Ciudad</td>
        </tr>

        <?php

        $num = 1;

        foreach($ciudades as $ciudad){
            echo   
            <<<HTML

                <tr>
                    <td>$num</td>
                    <td>$ciudad</td>

                </tr>

            HTML;
            $num++;
        }

        ?>
    </table>

    <p>7)</p>

    <table>
        <tr>
            <th>tipo</th>
            <th>valor</th>
        </tr>

        <tr>
            <td>Nombre</td>
            <td><?= $persona ["nombre"] ?></td>
        </tr>

        <tr>
            <td>Apellidos</td>
            <td><?= $persona ["apellido"] ?></td>
        </tr>

        <tr>
            <td>Telefono</td>
            <td><?= $persona ["telefono"] ?></td>

        </tr>

        <tr>
            <td>Ciudad</td>
            <td><?= $persona ["ciudad"] ?></td>
        </tr>

        <tr>
            <td>Edad</td>
            <td><?= $persona ["edad"] ?> </td>
        </tr>
    </table>

    <p>8)</p>

    <p>Respuesta: <?= calcularMayor(100, 100)?></p>

    <?php

    function calcularMayor(int $num1, int $num2): string{
        if($num1 > $num2){
            return "$num1 es mayor que $num2";
        }elseif($num2 > $num1){
            return "$num2 es mayor que $num1";
        }else{
            return "$num1 es igual a $num2";
        }
    }

    ?>

    <p>9) </p>
    <p>El precio con IVA de diez euros <?= calcularIva(10) ?></p>

    <?php

    function calcularIva(int $precio) : int|float{
        return $precio *1.21;

    }

    ?>


</body>
</html>