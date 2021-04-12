<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class AlphaNumeric implements ValidationStrategy 
{
    public function validate(string $name, $value)
    {
        if (! preg_match("/^[a-zA-Z0-9]+\$/", $value)) {
            return "$name must contain only alphabets & numbers";
        }

        return "";
    }
}