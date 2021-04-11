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
                $error = $validationContext->validate($inputName, $inputValue, $inputRule);
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