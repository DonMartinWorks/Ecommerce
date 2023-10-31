<?php

/**
 * Funcion para mostrar activo en el sidebar el link actual
 */
function setActive(array $route)
{
    # Ruta activa
    if (is_array($route)) {
        foreach ($route as $r) {
            # Si esta activa, envia la clase "active"
            if (request()->routeIs($r)) {
                return 'active';
            }
        }
    }
}
