<?php



header('Content-Type: application/json');
include('connect.php');

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id_posta'];
$action = $data['action'];

// Bezpieczeństwo – dozwolone tylko te 2 wartości
$allowed = [
    'like' => 'add_like',
    'dislike' => 'dislike'
];

if (!isset($allowed[$action])) {
    echo json_encode(['success'=>false, 'error'=>'Invalid action']);
    exit;
}

$column = $allowed[$action];

// Budowa SQL tylko z whitelisted column
$sql = "UPDATE post_table SET $column = $column + 1 WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

echo json_encode(['success'=>true,'action'=>$action,'id'=>$id]);


?>

