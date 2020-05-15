<?php

class Autoloader {
        
    /**
     * register
     * call the autoload according to the class
     */
    public static function register() {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
        
    /**
     * autoload
     * call necessary classes
     * @param string $class
     */
    public static function autoload($class) {
        require './DAO/'.$class.'.php';
    }
}