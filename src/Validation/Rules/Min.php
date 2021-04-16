<?php 

namespace PhpValidator\Src\Validation\Rules;

use PhpValidator\Src\Validation\Exceptions\RuleMissingParams;
use PhpValidator\Src\Validation\Interfaces\ValidationStrategy;

class Min implements ValidationStrategy 
{
    public function validate(string $name, $value, $params = [])
    {
        if (count($params) < 1) {
            throw new RuleMissingParams("min rule must have 1 parameter");
        }  

        if (is_numeric($value) and $value < $params[0]) {
            return "$name must be greater than or equal {$params[0]}";
        } elseif (! is_numeric($value) and strlen($value) < $params[0]) {
            return "$name must be greater than or equal {$params[0]} characters";
        }

        return "";
    }
}