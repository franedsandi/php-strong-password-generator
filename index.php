<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-item-center">
    <?php
    if (isset($_SESSION['error'])) {
        echo '<div class="error generalities py-0">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']);
    }
    ?>
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <div class="message generalities">
      <h3>Scelgiere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</h3>
    </div>
    <div class="form generalities">
      <form action="function.php" method="post">
        <label name="length" class="me-5">Lunghezza password:</label>
        <input class="length-selector" type="number" id="length" name="length"><br><br>
        <input class="me-2 btn btn-primary" type="submit" value="Invia">
        <input class="btn btn-secondary" type="reset" value="Anulla">
      </form>
    </div>
  </div>

</body>
</html>