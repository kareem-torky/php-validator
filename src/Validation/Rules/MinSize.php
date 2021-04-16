<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class MinSize implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        $size = $value['size'] / (1024);

        if ($size < $params[0]) {
            return "$name size must be greater than or equal {$params[0]} kb";
        }

        return "";
    }
}