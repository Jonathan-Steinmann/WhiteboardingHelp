<?php 

spl_autoload_register(NULL, FALSE);
spl_autoload_extensions('.php');
spl_autoload_register(array('Autoloader', 'load'));

class ClassNotFoundException extends Exception{}

class Autoloader
{

    public static function load($class)
    {

        if (class_exists($class, FALSE)) {
            return;
        }

        $file = $class . '.php';

        if (!file_exists($file)) {
            eval('class ' . $class . '{}');
            throw new Exception('File ' . $file . ' not found.');
        }

        require_once($file);
        unset($file);

        if (!class_exists($class, FALSE)) {
            eval('class ' . $class . '{}');
            throw new ClassNotFoundException('Class ' . $class . ' not found.');
        }

    }

}

try {
    Dispatcher::dispatch();
}

catch (ClassNotFoundException $e) {
    echo $e->getMessage();
    exit();
}

catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
