<?php
// ---------- Versión con static:: (Late Static Binding) ----------
Class A{
    public static function miFuncion(){
        //Mostrará el nombre de la clase actual::
        echo __CLASS__;
    }
    public static function otraFuncion(){
        static::miFuncion();
    }
}//fin de A

Class B extends A {
    public static function miFuncion(){
        //Mostrará el nombre de clase actual::
        echo __CLASS__;
    }
}

echo "Con static:: => ";
B::otraFuncion();   // Resultado: B (resuelve en la clase desde donde se llamó)

echo "\n";

// ---------- Versión con self:: ----------
Class A2{
    public static function miFuncion(){
        echo __CLASS__;
    }
    public static function otraFuncion(){
        self::miFuncion();
    }
}//fin de A2

Class B2 extends A2 {
    public static function miFuncion(){
        echo __CLASS__;
    }
}

echo "Con self::   => ";
B2::otraFuncion();  // Resultado: A2 (self siempre apunta a la clase donde fue definido el método)
echo "\n";
