<?php
function sumatoria_a($array)
{
    $resultado = 0;
    for ($i = 0; $i <=  count($array) -1; $i++) {
        $resultado = $resultado + $array[$i];
    }
    return $resultado;
}

function sumatoria_b($array)
{
    $resultado = 0;
    foreach ($array as $item)
    {
        $resultado = $resultado + $item;
    }
    return $resultado;
}

function sumatoria_c($array)
{
    $resultado = 0;
    $i = 0;
    $cantidadElementos = count($array);

    while($i < $cantidadElementos)
    {
        $resultado = $resultado + $array[$i];
        $i++;
    }
    return $resultado;
}
?>