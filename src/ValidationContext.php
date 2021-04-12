<?php 

namespace PhpValidator\Src;

class ValidationContext 
{
    private $rule, $ruleClass;

    public function validate(string $name, $value, string $rule, array $params = [])
    {
        $this->rule = $rule;
        $this->getRuleClassName();
        $ruleObj = new $this->ruleClass;
        return call_user_func_array([$ruleObj, 'validate'], [$name, $value, $params]);
    }

    public function getRuleClassName()
    {
        /*
            Ex: 
            required --> Required 
            in_array --> InArray
        */
        // TODO: using mapping instead of rule name conversion

        $ruleNamespace = "PhpValidator\Src\Rules\\";
        $ruleClassName = str_replace(" ", "", ucwords(str_replace("_", " ", $this->rule)));
        $this->ruleClass = $ruleNamespace . $ruleClassName;
    }
}