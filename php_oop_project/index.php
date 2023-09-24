<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>PHP OOP</title>
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <?php include  "components/header.php" ?>

  <div class="main_content">
    <?php include "components/class_object.php" ?>
    <?php include "components/method_object.php" ?>
    <?php include "components/constructor_destructor.php" ?>
    <?php include "components/constructor_destructor2.php" ?>
    <?php include "components/constant.php" ?>
  </div>
  <?php include  "components/footer.php" ?>

  <script>
    window.onload = function() {
      var mainContentDiv = document.querySelector(".main_content");
      mainContentDiv.scrollTop = mainContentDiv.scrollHeight;
    };
  </script>

</body>

</html>