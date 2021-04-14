<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Required implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (empty($value)) {
            return "$name is required";
        }

        return "";
    }
}