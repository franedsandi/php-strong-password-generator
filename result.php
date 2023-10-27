<?php
session_start();
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Generatore di Password Sicure</title>
</head>
<body>
  <div class="container d-flex justify-content-center align-item-center">
    <?php
    if (isset($generatedPassword)) {
        echo '<h2>La password generata es:</h2>';
        echo '<div class="content">';
        echo '<div class="response generalities">';
        echo "<h3>$generatedPassword</h3>";
        echo '</div>';
        echo '<form action="index.php">';
        echo '<input class="mt-3 btn btn-primary" type="submit" value="Torna alla homepage">';
        echo '</form>';
        echo '</div>';
    }
    ?>
  </div>
</body>
</html>