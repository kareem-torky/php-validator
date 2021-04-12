<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Between implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (is_numeric($value) and ($value < $params[0] or $value > $params[1])) {
            return "$name must be between {$params[0]} and {$params[1]}";
        } elseif (! is_numeric($value) and (strlen($value) < $params[0] or strlen($value) < $params[1])) {
            return "$name must be between {$params[0]} and {$params[1]} characters";
        }
        
        return "";
    }
}