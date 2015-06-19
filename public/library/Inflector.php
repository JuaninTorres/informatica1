<?php

class Inflector {

    /**
     * Cada segmento separado por guiones se le coloca la primera letra en mayúscula
     *
     * @param $value
     * @return string
     */
    public static function camel($value)
    {
        $segments = explode('-', $value);

        array_walk($segments, function (&$item) {
            $item = ucfirst($item);
        });

        return implode('', $segments);
    }

    /**
     * Generador de CamelCase con la primera letra en minúscula
     *
     * @param $value
     * @return string
     */
    public static function lowerCamel($value)
    {
        return lcfirst(static::camel($value));
    }

    public static function fromCamelCase($value) {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $value, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }

        return implode('_', $ret);
    }
}