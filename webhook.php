<?php

require_once 'vendor/autoload.php';

$inputJSON = file_get_contents('php://input');

print_r($inputJSON);

file_put_contents('logs/webhook.log', $inputJSON);