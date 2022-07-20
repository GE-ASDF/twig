<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;
use app\models\portal\User;

class HomeController extends ContainerController{

    public function index(){
       $users = new User;
       $this->view([
        'title'=>"Lista de usuários",
        "usuarios"=> $users,
       ], 'portal.home');
    }
    
}