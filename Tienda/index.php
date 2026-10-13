<?php
spl_autoload_register(function ($clase) {
    // Quitamos el namespace raíz "Tienda\" porque ya estamos parados en esa carpeta
    $clase = str_replace('Tienda\\', '', $clase);
    $archivo = __DIR__ . '/' . str_replace('\\', '/', $clase) . '.php';

    if (file_exists($archivo)) {
        require_once $archivo;
    }
});

use Tienda\Mascotas\Loro;

$pedrito = new Loro("Pedrito");

echo $pedrito->emitirSonido();
echo "<br>";
echo $pedrito->volar();