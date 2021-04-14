<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Arr implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! is_array($value)) {
            return "$name must be array";
        }

        return "";
    }
}