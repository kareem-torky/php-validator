<?php

require_once __DIR__ . "/vendor/autoload.php";

use PhpValidator\Src\Validator;

// Mimicing request data
$data = [
    'name' => 'kareem fouad',
    'age'  => -12,
];

// Testing validator class
$validator = Validator::make($data, [
    'name'  => 'required|str|min:20',
    'age'   => 'required|numeric|min:0',
]);

if ($validator->fails()) {
    print_r($validator->errors());
}