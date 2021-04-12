<?php 

namespace PhpValidator\Src;

class Validator 
{
    private $errors = []; 

    public static function make(array $data, array $rules)
    {
        $validationContext = new ValidationContext;
        $validator = new self;


        foreach ($rules as $inputName => $inputRules) {
            $inputRulesArr = explode("|", $inputRules);
            $inputValue = $data[$inputName] ?? "";

            foreach ($inputRulesArr as $inputRule) {
                $inputRuleParams = [];

                if (str_contains($inputRule, ":")) {
                    $inputRuleArr = explode(":", $inputRule);
                    $inputRuleName = $inputRuleArr[0];
                    $inputRuleParams = explode(",", $inputRuleArr[1]);
                } else {
                    $inputRuleName = $inputRule;
                }

                $error = $validationContext->validate($inputName, $inputValue, $inputRuleName, $inputRuleParams);
                if (! empty($error)) {
                    $validator->errors[] = $error;
                    break;
                }
            }
        }

        return $validator;
    }

    public function errors()
    {
        return $this->errors;
    }
}