<?php 

namespace PhpValidator\Src\Validation;

class ValidationRuleMapper 
{
    private static $rulesMap = [
        'alpha'              => 'Alpha',
        'alpha_numeric'      => 'AlphaNumeric',
        'array'              => 'Arr',
        'between'            => 'Between',
        'email'              => 'Email',
        'max'                => 'Max',
        'min'                => 'Min',
        'numeric'            => 'Numeric',
        'required'           => 'Required',
        'string'             => 'Str',
        'url'                => 'Url',
    ]; 

    public static function getRuleClassName($rule)
    {
        $ruleNamespace = "PhpValidator\Src\Validation\Rules\\";
        $ruleClass = self::$rulesMap[$rule];

        return $ruleNamespace . $ruleClass;
    }
}
