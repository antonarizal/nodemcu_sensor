<?php
header('Content-Type: application/json; charset=utf-8');
$data=[
    "status"=>false,
    "message"=>"Pompa Mati",
];

echo json_encode($data);

//https://randomnerdtutorials.com/esp8266-nodemcu-http-get-post-arduino/