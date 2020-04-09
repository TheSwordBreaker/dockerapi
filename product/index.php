<?php 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

    $a = ['Eggs','Milk','NewsPapper'];
    echo json_encode($a)
?>