<?php

require_once __DIR__ . "/vendor/autoload.php";

use PhpValidator\Src\Validator;

// Mimicing request data
$data = [
    'name' => 'kareem fouad',
    'age'  => -1,
];

// Testing validator class
$validator = Validator::make($data, [
    'name'  => 'required|str',
    'age'   => 'required|numeric|min:0',
]);

print_r($validator->errors());