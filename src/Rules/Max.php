<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Max implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if ($value > $params[0]) {
            return "$name must be less than or equal {$params[0]}";
        }

        return "";
    }
}