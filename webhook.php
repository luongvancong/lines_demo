<?php

require_once 'vendor/autoload.php';

$inputJSON = file_get_contents('php://input');

if($inputJSON) {
    file_put_contents('logs/webhook.log', $inputJSON, FILE_APPEND);
} else {
    file_put_contents('logs/webhook.log', json_encode($_POST), FILE_APPEND);
}
