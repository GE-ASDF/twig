<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController{
    
    public function index(){
        
    }

    public function show($request){
        $this->view([
            'title'=> "Curso",
            'curso'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint a tempora voluptatum illo, enim nam quia, rem pariatur eum assumenda sit accusantium ipsum quasi deleniti! Libero beatae consequuntur consectetur ad.',
        ],'portal.curso');
    }

    public function create(){

    }

    public function store(){

    }

    public function edit($id = null){

    }

}