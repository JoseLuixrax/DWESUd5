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

echo "Creando Contador \"a\" <br>";
$a = new Contador();
echo "Incrementando contador \"a\" <br>";
$a->incremento();
echo "Incrementando contador \"a\" <br>";
$a->incremento();
echo "Mostrando Valor \"a\" <br>";
echo $a->getValor();
echo "<br>";

echo "Creando Contador \"b\" <br>";
$b = new Contador();
echo "Incrementando contador \"b\" <br>";
$b->incremento();
echo "Mostrando Valor \"b\" <br>";
echo $b->getValor();
echo "<br>";


echo "Creando Contador \"c\" <br>";
$c = new Contador();
echo "Incrementando contador \"c\" <br>";
$c->incremento();
echo "Incrementando contador \"c\" <br>";
$c->incremento();
echo "Mostrando Valor \"b\" <br>";
echo $c->getValor();
echo "<br>";


echo "Numero de contadores creados: ".Contador::getNumContadoresInstanciados(). "<br>";

echo("Repositorio con el código <a href='https://github.com/JoseLuixrax/DWESUd5/blob/main/ejemplos/contador/contador.php' target=_blank>aqui</a>");
