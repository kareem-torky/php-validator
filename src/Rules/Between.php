<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Between implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if ($value < $params[0] or $value > $params[1]) {
            return "$name must be between {$params[0]} and {$params[1]}";
        }

        return "";
    }
}