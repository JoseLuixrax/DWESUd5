<?php
/** 
 *  @author Jose Luis Pérez Lara
 * index y fichero de pruebas para la clase contador.php
*/
require_once("contador.php");
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
echo "Incrementando contador \"c\" <br>";
$c->incremento();
echo "Mostrando Valor \"c\" <br>";
echo $c->getValor();
echo "<br>";


echo "Numero de contadores creados: ".Contador::getNumContadoresInstanciados(). "<br>";

echo("Repositorio con el código del contador <a href='https://github.com/JoseLuixrax/DWESUd5/blob/main/ejemplos/contador/contador.php' target=_blank>aqui</a>");
echo "<br>";
echo("Repositorio con el código del index <a href='https://github.com/JoseLuixrax/DWESUd5/blob/main/ejemplos/contador/index.php' target=_blank>aqui</a>");