<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';
    $confirm_password = $_POST["confirm_password"] ?? '';
    $birth_year = (int)($_POST["birth_year"] ?? 0);

    $current_year = 2026;

    if (!$username || !$password || !$confirm_password || !$birth_year) {
        echo "Please provide all fields";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Your password not match:<br>";
        echo "password: $password<br>";
        echo "repeat password: $confirm_password";
        exit;
    }

    $age = $current_year - $birth_year;

    echo "Your username is: $username<br>";
    echo "Your age: $age years old";
}
?>
}