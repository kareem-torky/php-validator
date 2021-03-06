<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Required implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if ((! is_array($value) and empty($value)) or (is_array($value) and empty($value['name']))) {
            return "$name is required";
        }

        return "";
    }
}