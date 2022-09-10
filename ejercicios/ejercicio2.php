<?php
function cuadradoBinomioPerfecto_a($a, $b)
{
    return pow($a, 2) + 2*($a+$b) + pow($b, 2) ;
}
function cuadradoBinomioPerfecto_b($a, $b)
{
    return ($a*$a) + 2*($a+$b) + ($b*$b);
}
?>
