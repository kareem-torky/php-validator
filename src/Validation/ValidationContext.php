<?php 

namespace PhpValidator\Src\Validation;

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
        $this->ruleClass = ValidationRuleMapper::getRuleClassName($this->rule);
    }
}