<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$info = array(
    'v' => 0.0.1,
    'list' => array(
        'active' => false,
        'id' => 0,
        'domains_done' => 0,
        'domains_left' => 0,
        'domains_total' => 0,
        'percentage' => 0
    )
);

echo json_encode($info, JSON_PRETTY_PRINT);