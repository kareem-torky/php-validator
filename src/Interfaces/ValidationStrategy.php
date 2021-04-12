<?php

namespace PhpValidator\Src\Interfaces;

interface ValidationStrategy 
{
    public function validate(string $name, $value, $params = []);
}