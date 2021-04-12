<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Arr implements ValidationStrategy 
{
    public function validate(string $name, $value)
    {
        if (! is_array($value)) {
            return "$name must be array";
        }

        return "";
    }
}