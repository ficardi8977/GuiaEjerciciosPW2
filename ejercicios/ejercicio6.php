<?php
class Saludar
{
    public $nombre;
    public $apellido;

    function __construct($paramNombre, $paramApellido)
    {
        $this->nombre = $paramNombre;
        $this->apellido = $paramApellido;
    }

    public function SaludoFormal($horario)
    {
        if(!$this->esHorarioValido($horario)) {
            return "horario invalido";
        }

        $saludo = $this->responderMomentoDia($horario, "Buenos dias", "Buenas tardes", "Buenas noches");
        return $saludo . " " . $this->nombre . " " . $this->apellido;

    }

    public function SaludoInformal($horario)
    {
        if(!$this->esHorarioValido($horario)) {
            return "horario invalido";
        }

        $saludo = $this->responderMomentoDia($horario, "un buen dia", "una buena tarde", "una buena noche");

        return "!Hola " . $this->nombre . "! " . "Que tengas " . $saludo;
    }

    private function responderMomentoDia($horario, $dia, $tarde, $noche)
    {
        switch ($horario) {
            case ($horario >= 5 && $horario < 13):
                $saludo = $dia;
                break;
            case ($horario >= 13 && $horario < 21):
                $saludo = $tarde;
                break;
            case (($horario >= 0 && $horario < 5) || ($horario >= 21 && $horario < 24)):
                $saludo = $noche;
                break;
        }
        return $saludo;
    }

    private function esHorarioValido($horario)
    {
        return ($horario >= 0 && $horario < 24) ? true : false;
    }
}

?>