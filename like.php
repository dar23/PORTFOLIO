<?php

header('Content-Type: application/json');


   $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);



?>

