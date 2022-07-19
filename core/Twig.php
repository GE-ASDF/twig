<?php

namespace core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Twig{

    private $twig;
    private $functions = [];
  
    public function loadTwig(){
        $this->twig = new Environment($this->loadViews(), [
        'debug' => true,
        'auto_reload' => true
        ]);
        return $this->twig;
   }
   private function loadViews(){
    return new FilesystemLoader('../app/views');
   }
}