<?php require 'helpers.php'; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CustomsForge Template</title>

  <script type="text/javascript" src="javascripts/libraries/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="javascripts/libraries/select2.min.js"></script>
  <link rel="stylesheet" href="assets/sass/themes/default/theme.css">
</head>
<body>
  <?php include 'layout/topbar.html'; ?>
  <?php include 'layout/navigation.html'; ?>
  
  <div id="main">
    <?php $templateName = "templates/{$page}.php"; ?>
    <?php include $templateName; ?>
  </div>

  <?php include 'layout/footer.html'; ?>
</body>
</html>
