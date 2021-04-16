<?php 

namespace PhpValidator\Src\Validation;

use PhpValidator\Src\Validation\Exceptions\RuleClassNotExist;
use PhpValidator\Src\Validation\Exceptions\RuleNameNotExist;

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
        if (! array_key_exists($rule, self::$rulesMap)) {
            throw new RuleNameNotExist("Rule $rule doesn't exist");
            return;
        }

        $ruleClass = "PhpValidator\Src\Validation\Rules\\" . self::$rulesMap[$rule];
        if (! class_exists($ruleClass)) {
            throw new RuleClassNotExist("Class $rule doesn't exist");
            return;
        }

        return $ruleClass;
    }
}
