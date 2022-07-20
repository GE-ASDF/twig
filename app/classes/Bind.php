<?php

namespace app\classes;

class Bind{

    private static $bind = [];
   

    public static function set($name, $value){
        if(!isset(static::$bind[$name])){
           return static::$bind[$name] = $value;
        }
    }
    public static function get($name){
        if(isset(static::$bind[$name])){
            return static::$bind[$name];
        }else{
            throw new \Exception("Esse índice não existe dentro do Bind: {$name}");
        }
    }
}