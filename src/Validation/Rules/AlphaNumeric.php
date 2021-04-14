<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class AlphaNumeric implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! preg_match("/^[a-zA-Z0-9]+\$/", $value)) {
            return "$name must contain only alphabets & numbers";
        }

        return "";
    }
}