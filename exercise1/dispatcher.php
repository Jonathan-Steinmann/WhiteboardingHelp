<?php

class Dispatcher
{

    public static function dispatch()
    {

        $url = explode('/', trim($_SERVER['PATH_INFO']));

        $controller = !empty($url[1]) ? $url[1] . 'Controller' : 'DefaultController';
        $method = !empty($url[2]) ? $url[2] . 'Action' : 'init';
        $arg = !empty($url[3]) ? $url[3] : NULL;

        $cont = new $controller;
        $cont->$method($arg);

    }

}