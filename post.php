
<?php
include 'connect.php';  



if ($_SERVER['REQUEST_METHOD'] === 'POST') {


$target_dir = 'uploads/';

$picture = '';

if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
    
    $target_file = $target_dir . basename($_FILES['picture']['name']);

    if (move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
        $picture = $_FILES['picture']['name'];
    }
}

    $tweet = isset($_POST['tweet']) ? $_POST['tweet'] : '';

        $query = "INSERT INTO post_table (text_post,picture) VALUES ('$tweet','$picture')";
            
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
        echo '<div class="picture">';
        echo '<img src="uploads/'. $row['picture'] . '"  class="picture_post">';
        echo '</div>';
        echo "<p>" . htmlspecialchars($row['text_post']) . "</p>";
    echo '</div>';
      }
} else {
    echo "Błąd zapytania: " . $mysqli->error;
}

echo '</div>';












?>
