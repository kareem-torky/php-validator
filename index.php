<?php

require_once __DIR__ . "/vendor/autoload.php";

use PhpValidator\Src\Validation\Validator;
use PhpValidator\Src\Request;

// Read request data
$req = new Request;

$data = [
    'name' => $req->post('name'),
    'age'  => $req->post('age'),
    'img'  => $req->files('img'),
];

// Testing validator class
$validator = Validator::make($data, [
    'name'  => 'required|string|min:5',
    'age'   => 'required|numeric|min:0',
]);

if ($validator->fails()) {
    header("Content-Type: application/json");
    echo json_encode($validator->errors());
}