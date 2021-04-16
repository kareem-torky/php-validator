<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Exceptions\RuleMissingParams;
use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class MaxSize implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (count($params) < 1) {
            throw new RuleMissingParams("max size rule must have 1 parameter");
        }  

        $size = $value['size'] / (1024);

        if ($size > $params[0]) {
            return "$name size must be less than or equal {$params[0]} kb";
        }

        return "";
    }
}