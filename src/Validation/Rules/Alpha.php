<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Alpha implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! preg_match("/^[a-zA-Z]+\$/", $value)) {
            return "$name must contain only alphabets";
        }

        return "";
    }
}