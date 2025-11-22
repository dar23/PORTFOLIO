    <?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/portfolio/css/style.css">
<link rel="stylesheet" href="/portfolio/css/menu.css">
<link rel="stylesheet" href="/portfolio/css/input.css">
<link rel="stylesheet" href="/portfolio/css/like_dislike.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

<title>Document</title>
</head>
<body>




 <div class="main_content">

    <?php include 'menu.php'; ?>

    <div class="part_one">

      <?php include 'post.php'; ?>
      
   





<form action="post.php" method="post" class="post_form"  enctype="multipart/form-data">
  <input type="text" name="tweet" class="tweet" placeholder="Co słychać?" autofocus><i class="fa-duotone fa-solid fa-t"></i>

  <label for="media-upload" class="media-upload-button">
    <span class="material-symbols-outlined">attach_file</span> <input type="file" id="media-upload" name="picture_video" accept="image/*,video/*" style="display: none;">
  </label>

  <button type="submit" name="submit_button" class="rocket_launch">
    <span class="material-symbols-outlined">rocket_launch</span>
  </button>
</form>




  

    </div>



    <div class="part_two">


      <?php include 'popular_post.php'; ?>









    </div>

 </div>

  <script src="/portfolio/js/icon_rocket.js"></script>

    <script src="/portfolio/js/script.js"></script>

    <script src="/portfolio/js/main.js"></script>

  <script src="/portfolio/js/menu.js"></script>

</body>
</html>