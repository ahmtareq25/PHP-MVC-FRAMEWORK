<?php

namespace app\core;

class Response
{

    public function setResponseCode($code){
        http_response_code($code);
        return $this;
    }

}