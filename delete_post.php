<?php

include 'connect.php';




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_id'])) {
  
  
    $post_id = (int) $_POST['post_id']; // rzutowanie na int dla bezpieczeństwa

    // Przygotowane zapytanie (bezpieczniejsze od konkatenacji)
    $stmt = $mysqli->prepare("DELETE FROM post_table WHERE id = ?");
    $stmt->bind_param("i", $post_id);

    if ($stmt->execute()) {
        // Sukces – przekierowanie z powrotem
        header("Location: index.php");
        exit();
    } else {
        echo "Błąd podczas usuwania posta: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Nieprawidłowe żądanie.";
}

$mysqli->close();




?> 