<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$info = array(
        'v' => 1
);

echo json_encode($info, JSON_PRETTY_PRINT);