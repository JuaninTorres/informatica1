<?php

class NumerosController {
    
    public function indexAction()
    {
        return new View('numeros');
    }

    public function definicion_de_conjuntoAction()
    {
        return new View('numeros.definicion_de_conjunto');
    }

}