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
        'file'               => 'File',
        'image'              => 'Image',
        'max'                => 'Max',
        'min'                => 'Min',
        'max_size'           => 'MaxSize',
        'min_size'           => 'MinSize',
        'numeric'            => 'Numeric',
        'required'           => 'Required',
        'required_file'      => 'RequiredFile',
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
