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