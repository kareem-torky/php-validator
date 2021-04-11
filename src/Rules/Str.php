<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Str implements ValidationStrategy 
{
    public function validate(string $name, $value)
    {
        if (! is_string($value)) {
            return "$name must be string";
        }

        return "";
    }
}