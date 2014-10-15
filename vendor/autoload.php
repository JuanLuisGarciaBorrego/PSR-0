<?php
/**
 * @author: JuanLuis
 * @date: 15/10/14 10:51
 */

function autoload($nombreDeClase)
{
    $nombreDeClase = ltrim($nombreDeClase, '\\');
    $nombreDeFichero  = '';
    $nombreDeEspacio = '';
    if ($ultimaPos = strrpos($nombreDeClase, '\\')) {
        $nombreDeEspacio = substr($nombreDeClase, 0, $ultimaPos);
        $nombreDeClase = substr($nombreDeClase, $ultimaPos + 1);
        $nombreDeFichero  = str_replace('\\', DIRECTORY_SEPARATOR, $nombreDeEspacio) . DIRECTORY_SEPARATOR;
    }
    $nombreDeFichero .= str_replace('_', DIRECTORY_SEPARATOR, $nombreDeClase) . '.php';

    require '../src/'.$nombreDeFichero;
}

spl_autoload_register('autoload');