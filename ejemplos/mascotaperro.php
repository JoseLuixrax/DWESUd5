<?php
class Mascota {
    public static function getName(){
        echo "Soy una mascota";
    }
    public static function whoami(){
        // static::getName(); // Devuelve "Soy una perro"
        // self::getName(); // Devuelve "Soy una mascota"
    }
}
class Perro extends Mascota {
    public static function getName(){
        echo "Soy un perro";
    }
}
Perro::whoami();