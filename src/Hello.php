<?php

namespace App;

class Hello
{
    private string $message;


    public function talk($message): string
    {
        $message = "Hello World !";
        return $message;  
    }
}