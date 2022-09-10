<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilos.css">
<title>Title</title>
</head>
<body class="flex-center">
<header>
<h1>Fernando Javier Icardi</h1>
</header>
<main>
<h2>Ejercicio1</h2>
<h3>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
    “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
    “avance” o “estado desconocido” ante un caso no esperado.
    a) función semaforo_a($color): Resuelva la solución utilizando if else
    b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
    c) función semaforo_c($color): Resuelva la solución utilizando switch</h3>
<p>
    <?php
    require_once("ejercicios/ejercicio1.php");
    $variable = "verde";
    $resultado = semaforo_a($variable);
    echo "a) ejecuto el ejercicio1 semaforo if con las variable " . $variable . " y el resultado es: ". $resultado;
    echo"<br>";
    $variable = "rojo";
    $resultado = semaforo_b($variable);
    echo "b) ejecuto el ejercicio1 semaforo if inline con las variable " . $variable . " y el resultado es: ". $resultado;
    echo"<br>";
    $variable = "amarillo";
    $resultado = semaforo_c($variable);
    echo "c) ejecuto el ejercicio1 semaforo switch con las variable " . $variable . " y el resultado es: ". $resultado;
    echo"<br>";
    ?>
</p>

<h2>Ejercicio2</h2>
<h3>    Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
    recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
    2
    a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
    potencia
    b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
    desarrollada del binomio: a
    2 + 2*a*b + b
    2</h3>
<p>
    <?php
    require_once("ejercicios/ejercicio2.php");
    $a = "2";
    $b = "3";
    $resultado = cuadradoBinomioPerfecto_a($a, $b);
    echo "a) ejecuto el ejercicio2_a con las variable " . $a ." y ".$b . " y el resultado es: ". $resultado;
    echo"<br>";
    $resultado = cuadradoBinomioPerfecto_b($a, $b);
    echo "a) ejecuto el ejercicio2_b con las variable " . $a ." y ".$b . " y el resultado es: ". $resultado;
    echo"<br>";
    ?>
</p>
<h2>Ejercicio3</h2>
<h3>Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
    ambos textos concatenados como uno solo.</h3>
<p>
    <?php
    require_once("ejercicios/ejercicio3.php");
    $palabra1 = "Hola";
    $palabra2 = "Mundo";
    $resultado = concatenar($palabra1, $palabra2);
    echo "a) ejecuto el ejercicio3 con las variable " . $palabra1 ." y ".$palabra2 . " y el resultado es: ". $resultado;
    echo"<br>";
    ?>
</p>
<h2>Ejercicio4</h2>
<h3>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
    la función, el valor del parámetro haya sido incrementado en 1
    (Ver pasaje de parámetros por referencia)</h3>
<p>
<?php
require_once("ejercicios/ejercicio4.php");
$variable = 100;
$copiaVariable = $variable;
incrementar($variable);
echo "a) ejecuto el ejercicio4 con las variable " . $copiaVariable ." y el resultado es: ". $variable;
echo"<br>";
?>
</p>
    <h2>Ejercicio5</h2>
    <h3>
        Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
        valores.
        a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
        b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
        c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
    </h3>
    <p>
    <?php
    require_once("ejercicios/ejercicio5.php");
    $array = array(1, 2, 3, 4, 5);

    $resultado = sumatoria_a($array);
    echo "a) ejecuto el ejercicio5_a con las variable " . implode(",",$array) ." y el resultado es: ". $resultado;
    echo"<br>";
    $resultado = sumatoria_b($array);
    echo "b) ejecuto el ejercicio5_b con las variable " . implode(",",$array)  ." y el resultado es: ". $resultado;
    echo"<br>";
    $resultado = sumatoria_c($array);
    echo "c) ejecuto el ejercicio5_c con las variable " . implode(",",$array)  ." y el resultado es: ". $resultado;
    echo"<br>";
    ?>
    </p>

    <h2>Ejercicio6</h2>
    <h3>
        Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
        persona.
        Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
        concatenado al nombre un prefijo dependiendo del horario:
        05hs a 13hs “Buenos días”
        13hs a 21hs “Buenas tardes”
        21hs a 05hs “Buenas noches”
        Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
        Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
        sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
        perteneciente al horario .
        Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
        “¡Hola Ezequiel! Que tengas un buen día”

    </h3>
    <p>
        <?php
        require_once("ejercicios/ejercicio6.php");
        $nombre = "Fernando";
        $apellido = "Icardi";
        $horario = 9;

        $objSaludo = new Saludar($nombre, $apellido);

        echo "a) ejecuto el ejercicio6 con las variables " . $nombre ."," . $apellido ."," . $horario ." y el resultado del saludo formal es : ". $objSaludo->SaludoFormal($horario);
        echo"<br>";

        echo "b) ejecuto el ejercicio6 con las variables " . $nombre ."," . $apellido ."," . $horario ." y el resultado del saludo informal es : ". $objSaludo->SaludoInformal($horario);
        echo"<br>";

        ?>
    </p>
</main>
</body>
</html>