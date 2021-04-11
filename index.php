<?php

require_once __DIR__ . "/vendor/autoload.php";

use PhpValidator\Src\Validator;

// Mimicing request data
$data = [
    'name' => 'kareem fouad',
    'age'  => 26,
];

// Testing validator class
$validator = Validator::make($data, [
    'name'  => 'required|str',
    'age'   => 'required|numeric',
]);

print_r($validator->errors());