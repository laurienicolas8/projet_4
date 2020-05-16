<?php

class Session {
    private $session;

    public function __construct($session) {
        $this->session = $session;
    }
    
    /**
     * set
     * create a session variable
     * @param string $name
     * @param string $value
     */
    public function set($name, $value) {
        $_SESSION[$name] = $value;
    }
    
    /**
     * get
     * control that $_SESSION[$name] exists
     * return $_SESSION
     * @param string $name
     * @return mixed
     */
    public function get($name) {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
    }
        
    /**
     * remove
     * delete the session variable according to $name
     * @param string $name
     */
    public function remove($name) {
        unset($_SESSION[$name]);
    }

    /**
     * stop
     * destroy the session
     */
    public function stop() {
        session_destroy();
    }
}