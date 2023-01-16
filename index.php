<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Joshua Rose | PHP Blog Demo</title>
    <link rel="apple-touch-icon" sizes="180x180" href="https://jrose.me/demos/blog/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://jrose.me/demos/blog/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://jrose.me/demos/blog/favicon-16x16.png">
    <link rel="manifest" href="https://jrose.me/demos/blog/site.webmanifest">
    <link rel="stylesheet" href="https://jrose.me/demos/blog/styles.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://jrose.me/demos/blog/index.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9185025630643258"
     crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="loader" id="loader">
        <div>
        </div>
    </div>
    <div class="content" id="content">
    <?php include('includes/data.php') ?>
    <?php
        $startArrIndex = sizeof($postsArr) - 1;
        $endArrIndex = $startArrIndex - 10;
        if ($endArrIndex < 0)
        {
          $endArrIndex = 0;
        }
        $postsSubArr = array_reverse(array_slice($postsArr, $endArrIndex, $startArrIndex + 1));
      ?>
      <?php include('includes/header.php') ?>
      <?php include('includes/home_content.php') ?>
      <?php include('includes/about.php') ?>
      <?php include('includes/contact.php') ?>
      <?php include('includes/footer.php') ?>
    </div>
  </body>
</html>