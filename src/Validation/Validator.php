<?php 

namespace PhpValidator\Src\Validation;

class Validator 
{
    private $validationContext, $data, $rules;
    private $errors = []; 

    public static function make(array $data, array $rules)
    {
        $validator = new static();
        $validator->validationContext = new ValidationContext;
        $validator->data = $data;
        $validator->rules = $rules;
        $validator->performValidation();

        return $validator;
    }

    public function performValidation()
    {
        foreach ($this->rules as $field => $inputRules) {
            $inputRulesArr = explode("|", $inputRules);
            $inputValue = $this->data[$field] ?? "";

            foreach ($inputRulesArr as $inputRule) {
                $inputRuleParams = [];

                if (str_contains($inputRule, ":")) {
                    $inputRuleArr = explode(":", $inputRule);
                    $inputRuleName = $inputRuleArr[0];
                    $inputRuleParams = explode(",", $inputRuleArr[1]);
                } else {
                    $inputRuleName = $inputRule;
                }

                $error = $this->validationContext->validate($field, $inputValue, $inputRuleName, $inputRuleParams);
                if (! empty($error)) {
                    $this->errors[$field] = $error;
                    break;
                }
            }
        }
    }

    public function errors()
    {
        return $this->errors;
    }

    public function passes()
    {
        return empty($this->errors);
    }

    public function fails()
    {
        return ! empty($this->errors);
    }
}