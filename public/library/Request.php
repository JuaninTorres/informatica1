<?php

class Request {

    protected $url;
    protected $controller;
    protected $defaultController = 'home';
    protected $action;
    protected $defaultAction = 'index';
    protected $params = array();
    protected $baseController = 'Controller';

    /**
     * Creador de la instancia de Request
     * La primera parte de la url es el controlador, la segunda es la acción y de ahi en adelante
     * son variables
     *
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = trim($url, '/');
        $segments = explode('/', $this->getUrl());
        $this->resolveController($segments);
        $this->resolveAction($segments);
        $this->resolveParams($segments);
    }

    /**
     * Resolvedor del controlador
     *
     * @param $segments
     */
    public function resolveController(&$segments)
    {
        $this->controller = array_shift($segments);
        if (empty($this->controller))
        {
            $this->controller = $this->defaultController;
        }
    }

    /**
     * Resolvedor de la acción
     *
     * @param $segments
     */
    public function resolveAction(&$segments)
    {
        $this->action = array_shift($segments);
        if (empty($this->action))
        {
            $this->action = $this->defaultAction;
        }
    }

    /**
     * Resolvedor de los parámetros
     *
     * @param $segments
     */
    public function resolveParams(&$segments)
    {
        $this->params = $segments;
    }

    /**
     * Get de la url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get del controlador
     *
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Generador del nombre del controllador
     *
     * @return string
     */
    public function getControllerClassName()
    {
        return Inflector::camel($this->getController()) . 'Controller';
    }

    /**
     * Generador del nombre del archivo del controlador
     *
     * @return string
     */
    public function getControllerFileName()
    {
        return 'controllers/' . $this->getControllerClassName() . '.php';
    }

    public function getBaseControllerFileName()
    {
        return 'controllers/' . $this->baseController . '.php';
    }

    /**
     * Get de la Acción
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get del nombre de la función de la acción
     *
     * @return string
     */
    public function getActionMethodName()
    {
        return Inflector::lowerCamel($this->getAction()) . 'Action';
    }

    /**
     * Get de los parámetros
     *
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Ejecución del Request
     */
    public function execute()
    {
        $baseController      = $this->getBaseControllerFileName();
        $controllerClassName = $this->getControllerClassName();
        $controllerFileName  = $this->getControllerFileName();
        $actionMethodName    = $this->getActionMethodName();
        $params              = $this->getParams();

        if ( ! file_exists($controllerFileName))
        {
            exit('controlador no existe');
        }
        require $baseController;
        require $controllerFileName;

        $controller = new $controllerClassName();
        $response = call_user_func_array([$controller, $actionMethodName], $params);
        $this->executeResponse($response);
    }

    /**
     * Ejecución del Response
     *
     * @param $response
     */
    public function executeResponse($response)
    {
        if ($response instanceof Response)
        {
            $response->execute();
        } elseif (is_string($response))
        {
            echo $response;
        } elseif(is_array($response))
        {
            echo json_encode($response);
        } else
        {
            exit('Respuesta no valida');
        }
    }

}







