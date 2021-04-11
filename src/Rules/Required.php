<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Required implements ValidationStrategy 
{
    public function validate(string $name, $value)
    {
        if (empty($value)) {
            return "$name is required";
        }

        return "";
    }
}