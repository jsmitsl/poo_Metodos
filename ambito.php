<?php
$nombre = "Carlos"; // Variable global
class ejemplo
{
   public static function mostrarNombre()
    {
         $nombre="Jesus"; // Acceder a la variable global dentro de una función
         global $nombre; // Acceder a la variable global dentro de una función

        return "Nombre: " . $nombre;
    }

    public static function contador() {
        $numero = 0; // Conserva su valor en cada llamada
        $numero++;
        return "Contador: " . $numero . "<br>";
    }
    
}

//echo ejemplo::mostrarNombre();
echo "<br>";
echo ejemplo::contador();
echo "<br>";
echo ejemplo::contador();
echo "<br>";
echo ejemplo::contador(); 

