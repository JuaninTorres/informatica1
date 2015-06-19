<?php

/**
 * Llamada a las vistas
 *
 * @param $template
 * @param array $vars
 */
function view($template, $vars = array())
{
    extract($vars);

    require "views/$template.tpl.php";
}

/**
 * Llamada al controlador
 *
 * @param $name
 */
function controller($name)
{
    if (empty($name))
    {
        $name = 'home';
    }

    $file = "controllers/$name.php";

    if (file_exists($file))
    {
        require $file;
    }
    else
    {
        header("HTTP/1.0 404 Not Found");
        exit("Pagina no encontrada");
    }
}

/**
 * Función de debug
 *
 * @param $vars
 */
function dd($vars)
{
    var_dump($vars);
    die(1);
}