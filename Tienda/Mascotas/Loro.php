<?php
namespace Tienda\Mascotas;

use Tienda\Habilidades\Volador;

class Loro extends Ave {
    use Volador;

    public function emitirSonido() {
        return "¡Hola! ¿Quieres una galleta? 🦜";
    }
}
?>