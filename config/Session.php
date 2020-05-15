<?php

class Session {
    private $session;

    public function __construct($session) {
        $this->session = $session;
    }
    
    /**
     * set
     * create a session 
     * @param string $name
     * @param string $value
     */
    public function set($name, $value) {
        $_SESSION[$name] = $value;
    }
    
    /**
     * get
     * control that the $_SESSION[$name] exists
     * return that $_SESSION
     * @param string $name
     * @return mixed
     */
    public function get($name) {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
    }
    
    /**
     * stop
     * destroy the session
     */
    public function stop() {
        session_destroy();
    }
}