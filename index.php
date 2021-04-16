<?php

require_once __DIR__ . "/vendor/autoload.php";

use PhpValidator\Src\Validation\Validator;
use PhpValidator\Src\Request;

// Testing validator class
$request = new Request;

$validator = Validator::make($request->all(), [
    'name'  => 'required|string|min:5',
    'age'   => 'required|numeric|min:0',
    'img'   => 'required_file|image|max_size:1024',
]);

if ($validator->fails()) {
    header("Content-Type: application/json");
    echo json_encode($validator->errors());
}

// TODO: Errors bag and messages in separate classes
// TODO: Add input aliases
// TODO: Add exceptions
// TODO: Add readme with class diagram