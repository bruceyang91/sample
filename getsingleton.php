<?php
class Db{
    static private $_instance;
    private function __construct() {
        
    }
    static public function getsingleton(){
        if(!self::$_instance instanceof self){
            $_instance = new Db();
        }
        return self::$_instance;
    }
}
