<?php
session_start();

function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()?';
    return substr(str_shuffle($chars), 0, $length);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["length"])) {
        $_SESSION['error'] = "Non hai scelto la lunghezza della tua password";
        header("Location: index.php");
        exit();
    } else {
        $length = $_POST["length"];
        if ($length < 8 || $length > 32) {
            $_SESSION['error'] = "hai inretio il parametro errato, deve essere tra 8 e 32 (numeri enteri...)";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['password'] = generatePassword($length);
            header("Location: function.php");
            exit();
        }
    }
}

if (isset($_SESSION['password'])) {
    $generatedPassword = $_SESSION['password'];
    unset($_SESSION['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
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
