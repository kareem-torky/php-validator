<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Url implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! filter_var($value, FILTER_VALIDATE_URL)) {
            return "$name must be valid url";
        }

        return "";
    }
}