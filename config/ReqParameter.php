<?php 

class ReqParameter {
    private $parameter;

    public function __construct($parameter) {
        $this->parameter = $parameter;
    }

    public function getParam($name) {
        if (isset($this->parameter[$name])) {
            return $this->parameter[$name];
        }
    }

    public function setParam($name, $value) {
        $this->parameter[$name] = $value;
    }
}