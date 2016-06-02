<?php

namespace Planck\App\Controller;

use Planck\Core\Controller\Controller;
use Planck\Core\Network\Request;

class TodoController extends Controller {
    
    public function init() {
        //
    }
    
    private $data = [
        [
            'foo' => 'bar1',
        ],
        [
            'foo' => 'bar2',
        ],
        [
            'foo' => 'bar3',
        ],
        [
            'foo' => 'bar4',
        ],
        [
            'foo' => 'bar5',
        ],
    ];
    
    public function index() {
        //
        return $this->data;
    }
    
    public function view($id) {
        //   
        return $this->data[$id - 1];
    }
    
    public function add() {
        //
        $raw = json_decode(file_get_contents('php://input'), true);
        $this->data[] = $raw;
        return $this->data;
    }
    
    public function edit($id) {
        //
        $raw = json_decode(file_get_contents('php://input'), true);
        
        foreach ($raw as $key => $value) {
            $this->data[$id][$key] = $value;
        }
        
        return $this->data;
    }
}