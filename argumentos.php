<?php
class EjemploArgumentos
{
    //Ejemplo de paso por valor:
    public static function aumentar($numero)
    {
        $numero++; // Solo afecta dentro de la función
        echo "Número dentro de la función: $numero <br>";
    }


    //Ejemplo de paso por referencia:
    public static function aumentarReferencia(&$numero)
    {
        $numero++; // Modifica la variable original
    }
}


$num = 10;
EjemploArgumentos::aumentar($num);

echo "<h1>Ejemplo paso por valor: $num -- No cambia </h1>"; // No cambia

$num = 10;
EjemploArgumentos::aumentarReferencia($num);
echo "<h1>Ejemplo paso por referencia: $num --Si cambia</h1>"; // Cambia a 11
