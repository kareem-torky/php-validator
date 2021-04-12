<?php 

namespace PhpValidator\Src\Rules;

use PhpValidator\Src\Interfaces\ValidationStrategy;

class Alpha implements ValidationStrategy 
{
    public function validate(string $name, $value)
    {
        if (! preg_match("/^[a-zA-Z]+\$/", $value)) {
            return "$name must contain only alphabets";
        }

        return "";
    }
}