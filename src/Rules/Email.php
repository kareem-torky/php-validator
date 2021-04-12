<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Email implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return "$name must be valid email";
        }

        return "";
    }
}