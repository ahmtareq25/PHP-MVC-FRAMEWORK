<?php

namespace app\core;

class Request
{

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path, '?');

        return $position === false ? $path : substr($path, 0, $position);
        
    }

    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
        
    }

    public function isMethodGet(){
        return $this->method() == 'get';
    }

    public function isMethodPost(){
        return $this->method() == 'post';
    }


}