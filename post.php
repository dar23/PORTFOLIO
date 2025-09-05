<?php
include 'connect.php';  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $target_dir = 'uploads/';
    $picture = '';
    $video = '';

    // Obsługa uploadu zdjęcia
    if (isset($_FILES['picture_video']) && $_FILES['picture_video']['error'] === UPLOAD_ERR_OK) {
      
        $fileType = mime_content_type($_FILES['picture_video']['tmp_name']);
       
        if (strpos($fileType, 'image') === 0) {
            $target_file = $target_dir . basename($_FILES['picture_video']['name']);
            if (move_uploaded_file($_FILES['picture_video']['tmp_name'], $target_file)) {
                $picture = $_FILES['picture_video']['name'];
            }
        } elseif (strpos($fileType, 'video') === 0) {
            $target_file = $target_dir . basename($_FILES['picture_video']['name']);
            if (move_uploaded_file($_FILES['picture_video']['tmp_name'], $target_file)) {
                $video = $_FILES['picture_video']['name'];
            }
        }
    }

    $tweet = isset($_POST['tweet']) ? $_POST['tweet'] : '';

    $query = "INSERT INTO post_table (text_post, picture, video) VALUES ('$tweet', '$picture', '$video')"; // typ określony przy obsłudze uploadu
    $result = $mysqli->query($query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Błąd podczas dodawania posta: " . $mysqli->error;
    }
}

$select_query = "SELECT * FROM post_table ORDER BY id DESC";
$result = $mysqli->query($select_query);

echo '<div class="posts_list">';

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="post_window">';
        if (!empty($row['picture']) and isset($row['picture'])) {
            echo '<div class="picture">';
            echo '<img src="uploads/' . htmlspecialchars($row['picture']) . '" class="picture_post">';
            echo '</div>';
                 include 'like.php';
        }
        if (!empty($row['video']) and isset($row['video'])) {
            echo '<video controls class="video_post">';
            echo '<source src="uploads/' . htmlspecialchars($row['video']) . '" type="video/mp4">';
            echo 'Twoja przeglądarka nie obsługuje wideo.';
            echo '</video>';
                 include 'like.php';
        }
        echo "<p>" . htmlspecialchars($row['text_post']) . "</p>";


 
       

  
        echo '</div>';

     
      
    }
} else {
    echo "Błąd zapytania: " . $mysqli->error;
}

echo '</div>';
?>
