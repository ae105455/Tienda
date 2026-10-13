<?php
namespace Tienda\Mascotas;

class Ave {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function emitirSonido() {
        return "Sonido generico de ave";
    }
}