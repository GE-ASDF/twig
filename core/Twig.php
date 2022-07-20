<?php

namespace core;

use Closure;
use Doctrine\DBAL\Types\StringType;
use Sonata\Twig\Extension\TemplateExtension;
use Twig\Environment;
use Twig\Extension\StringLoaderExtension;
use Twig\Extra\String\StringExtension;
use Twig\Loader\FilesystemLoader;
use Twig\Extra\TwigExtraBundle\Extensions;
use Twig\TwigFunction;

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
   public function loadExtensions(){
     return $this->twig->addExtension(new StringExtension());
   }
   private function functionsToView($name, Closure $callback){
     return new TwigFunction($name, $callback);
   }

   public function loadFunctions(){
     require '../app/functions/twig.php';
     foreach($this->functions as $key => $value){
          $this->twig->addFunction($this->functions[$key]);
     }
   }

}