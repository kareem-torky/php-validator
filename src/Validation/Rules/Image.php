<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Image implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (! str_starts_with($value['type'], "image/")) {
            return "$name must be an image";
        }
        
        return "";
    }
}