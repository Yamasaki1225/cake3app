<?php
namespace App\Controller;

class HelloController extends AppController {
    public $name = "hello";
    public $autoRender = true;

    public function index(){
        //src/Template/Helloファルダの中にある、テンプレートを読みこんでページを表示させる
        $this->autoRender = true;
        //レイアウト機能を使った自動レイアウトをOFFにする
        $this->viewBuilder()->autoLayout(false);
    }
    public function other(){
        $this->viewBuilder()->autoLayout(false);
        $this->autoRender = true;
    }
}
?>