<?php 

namespace PhpValidator\Src\Validation;

use PhpValidator\Src\Validation\Exceptions\RuleClassNotExist;
use PhpValidator\Src\Validation\Exceptions\RuleMissingParams;
use PhpValidator\Src\Validation\Exceptions\RuleNameNotExist;

class ValidationContext 
{
    private $rule, $ruleClass;

    public function validate(string $name, $value, string $rule, array $params = [])
    {
        $this->rule = $rule;
        $this->getRuleClassName();
        $ruleObj = new $this->ruleClass;

        try {
            return call_user_func_array([$ruleObj, 'validate'], [$name, $value, $params]);
        } catch (RuleMissingParams $e) {
            die($e->getMessage());
        }
    }

    public function getRuleClassName()
    {
        try {
            $this->ruleClass = ValidationRuleMapper::getRuleClassName($this->rule);
        } catch (RuleNameNotExist|RuleClassNotExist $e) {
            die($e->getMessage());
        }
    }
}