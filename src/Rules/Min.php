<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Min implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (is_numeric($value) and $value < $params[0]) {
            return "$name must be greater than or equal {$params[0]}";
        } elseif (! is_numeric($value) and strlen($value) < $params[0]) {
            return "$name must be greater than or equal {$params[0]} characters";
        }

        return "";
    }
}