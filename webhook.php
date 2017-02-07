<?php

require_once 'vendor/autoload.php';

$inputJSON = file_get_contents('php://input');

$data = [];

$data['input'] = json_decode($inputJSON);
$data['POST'] = $_POST;
$data['GET'] = $_GET;

file_put_contents('logs/webhook.log', $data);