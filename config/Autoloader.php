<?php

class Autoloader {
    public static function register() {
        spl_autoload_register([__CLASS__, 'autoload']);
    }
    public static function autoload($class) {
        require './DAO/'.$class.'.php';
    }
}