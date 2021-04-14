<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Max implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (is_numeric($value) and $value > $params[0]) {
            return "$name must be less than or equal {$params[0]}";
        } elseif (! is_numeric($value) and strlen($value) > $params[0]) {
            return "$name must be less than or equal {$params[0]} characters";
        }

        return "";
    }
}