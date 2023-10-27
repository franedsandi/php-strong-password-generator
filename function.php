<?php
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
            $_SESSION['error'] = "hai inretio il parametro errato, deve essere tra 8 e 32 (numeri naturali ...)";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['password'] = generatePassword($length);
            header("Location: result.php");
            exit();
        }
    }
}

if (isset($_SESSION['password'])) {
    $generatedPassword = $_SESSION['password'];
    unset($_SESSION['password']);
}
?>