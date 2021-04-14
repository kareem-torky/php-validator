<?php

namespace PhpValidator\Src\Validation\Interfaces;

interface ValidationStrategy 
{
    public function validate(string $name, $value, $params = []);
}