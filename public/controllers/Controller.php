<?php 

abstract class Controller {

    /**
     * Prefijo que iran en todas las vistas estaticas
     *
     * @var
     */
    protected $prefixDefaultView;

    /**
     * Todas las clases deben tener su propio método indexAction
     *
     * @return mixed
     */
    public function indexAction()
    {
        return new View($this->prefixDefaultView);
    }


    /**
     * Con esto podemos responder a todas las llamadas a metodos que no existan
     *
     * @param $nombre
     * @param $args
     * @return View
     */
    public function __call($nombre, $args)
    {
        $nombreVista = preg_replace('/\\_action$/', '', Inflector::fromCamelCase($nombre));
        $vista = $this->prefixDefaultView . '.' . $nombreVista;

        return new View($vista);
    }
}