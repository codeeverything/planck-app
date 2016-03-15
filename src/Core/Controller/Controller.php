<?php

namespace Planck\Core\Controller;

use Planck\Core\Network\Request;

class Controller {
    protected $vars = array();
    
    protected function json($value) {
        $this->set(array('_serialize' => json_encode($value)));
    }
    
    protected function set($values) {
        $this->vars = array_merge($this->getVars(), $values);  
    }
    
    public function getVars() {
        return $this->vars;
    }
}