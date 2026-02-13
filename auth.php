<?php 
$input_username = $_POST['username'];
$input_password = $_POST['password'];

$usernameIsFound = false;
$passwordIsFound = false;

foreach($students as $username => $pass) {
    if ($username == $input_username) {
        $usernameIsFound = true;
    }
    if ($pass === $input_password) {
        $passwordIsFound = true;
    }
};

if ($usernameIsFound && $passwordIsFound) {
    header("location: dashboard.php");
} else {
    header("location: logout.php");
}
