<?php
namespace App\Controller;

class HelloController extends AppController {
    public function initialize(){
    $this->name = "hello";
    // $this->autoRender = false;
    $this->viewBuilder()->autoLayout(true);
    $this->viewBuilder()->layout('Hello');
    }

    public function index(){
        // $this->viewBuilder()->autoLayout(true);
        // $this->autoRender = true;
    }
    public function other(){
        // $this->viewBuilder()->autoLayout(false);
        // $this->autoRender = true;
    }
}
?>