<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class RequiredFile implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {   
        if (! array_key_exists($name, $_FILES)) {
            return "$name must be a file";
        }
     
        return "";
    }
}