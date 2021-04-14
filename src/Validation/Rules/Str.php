<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Str implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! is_string($value)) {
            return "$name must be string";
        }

        return "";
    }
}