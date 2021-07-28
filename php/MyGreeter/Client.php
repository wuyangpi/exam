<?php
namespace MyGreeter;

class Client
{
    
    public $tmp;
    
    public function __construct()
    {
        $this->tmp = "init";
    }
    
    public function getGreeting(){
        $now = date('H:i:s');
        if($now >= '06:00:00' && $now < '12:00:00'){
            return "Good morning";
        }elseif($now >= '12:00:00' && $now < '18:00:00'){
            return "Good afternoon";
        }else{
            return "Good night";
        }
    }
}


