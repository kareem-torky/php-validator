<?php 

namespace PhpValidator\Src;

class Request 
{
    public function get($key)
    {
        return $_GET[$key];
    }

    public function post($key)
    {
        return $_POST[$key];
    }

    public function files($key)
    {
        return $_FILES[$key];
    }
}