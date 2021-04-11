<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Numeric implements ValidationStrategy 
{
    public function validate(string $name, $value)
    {
        if (! is_numeric($value)) {
            return "$name must be a number";
        }

        return "";
    }
}