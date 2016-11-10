<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$version = '0.0.1';

if(
    (file_exists('/app/data/lock'))
    &&
    (file_exists('/app/data/list_id'))
    &&
    (file_exists('/app/data/domains_done'))
    &&
    (file_exists('/app/data/domains_left'))
    &&
    (file_exists('/app/data/domains_total'))
){
    $info = array(
            'v' => $version,
            'name' => getenv('name'),
            'list' => array(
                'active' => false,
                'id' => 0,
                'domains_done' => 0,
                'domains_left' => 0,
                'domains_total' => 0,
                'percentage' => 0
            )
        );
}else{
    $info = array(
        'v' => $version,
        'name' => getenv('name'),
        'list' => array(
            'active' => false,
            'id' => 0,
            'domains_done' => 0,
            'domains_left' => 0,
            'domains_total' => 0,
            'percentage' => 0
        )
    );
}

echo json_encode($info, JSON_PRETTY_PRINT);