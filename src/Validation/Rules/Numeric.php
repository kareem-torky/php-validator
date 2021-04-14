<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Numeric implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! is_numeric($value)) {
            return "$name must be a number";
        }

        return "";
    }
}