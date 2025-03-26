<?php
class Usuario {
    public $nombre;
 
    // Constructor
    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "Usuario $this->nombre creado.<br>";
    }
 
    // Destructor
    public function __destruct() {
        echo "Usuario $this->nombre eliminado.<br>";
    }
}
 
$usuario1 = new Usuario("Carlos");
unset($usuario1); // Eliminar objeto manualmente
