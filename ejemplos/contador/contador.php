<?php

class Contador {
    private $valor;
    private static $numContadoresInstanciados = 0;

    public function __construct()
    {
        self::$numContadoresInstanciados++;
    }

    public static function getNumContadoresInstanciados()
    {
        return self::$numContadoresInstanciados;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function incremento()
    {
        $this->valor++;
    }

}

$c = new Contador();
$d = new Contador();
$e = new Contador();
echo Contador::getNumContadoresInstanciados();

echo("Repositorio con el código <a href='https://github.com/JoseLuixrax/JoseLuixrax.github.io' target=_blank>aqui</a>");
