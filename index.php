<?php
  if(isset($_POST['download'])) {
      $imgUrl = $_POST['imgurl'];
      $ch = curl_init($imgUrl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $download = curl_exec($ch);
      curl_close($ch);
      header('Content-type: image/jpg');
      header('Content-Disposition: attachment; filename="thumbnail.jpg"');
      echo $download;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download Thumbnail</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100&family=Noto+Sans:wght@400;700&family=Poppins:ital,wght@0,500;0,600;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header>Download Thumbnail</header>
    <div class="url-input">
      <span class="title">Paste video URL:</span>
      <div class="field">
        <input type="text" placeholder="https://www.youtube.com/watch?v=" required>
        <input type="hidden" class="hidden-input" name="imgurl">
        <div class="bottom-line"></div>
      </div>
    </div>
    <div class="preview-area">
      <img src="" alt="thumbnail" class="thumbnail">
      <span class="iconify" data-icon="clarity:download-cloud-line"></span>
      <span>See preview here</span>
    </div>
    <button class="download-btn" type="submit" name="download">
      Download
      <span class="iconify" data-icon="uiw:download"></span>
    </button>
  </form>

<script src="./assets/js/script.js"></script>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</body>
</html>