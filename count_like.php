

<?php
include 'connect.php';

header("Content-Type: application/json; charset=UTF-8");

$json = file_get_contents("php://input");
$data = json_decode($json, true);

$type = $data['type'];
$post_id = intval($data['post_id']);




?>




















