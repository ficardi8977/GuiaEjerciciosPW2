<?php
function semaforo_a($color)
{
    $resultado = "no existe resultado";
    if($color == "rojo")
        $resultado = "frene";
    elseif($color == "amarillo")
        $resultado = "precaucion";
    elseif ($color == "verde")
        $resultado = "avance";
    return $resultado;
}
function semaforo_b($color)
{
    return (($color == "rojo") ? "frene": (($color =="amarillo") ? "precaucion" : (($color == "verde") ? "avance":"no existe resultado")));
}
function semaforo_C($color)
{
    $resultado = "no existe resultado";
    switch ($color) {
        case "verde":
            $resultado =  "avance";
            break;
        case "rojo":
            $resultado =  "frene";
            break;
        case "amarillo":
            $resultado =  "precaucion";
            break;
    }
    return $resultado;
}
?>