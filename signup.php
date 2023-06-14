<?php
$user = 'root';
$pass = 'Toshtemirov04*';
$db = 'web_project';
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users_login_info (`Name`, `Age`, `Email`, `Username`, `Password`) 
              VALUES ('$fname', '$age', '$email', '$username', '$password')";

    mysqli_query($db, $query) or die(mysqli_error($db));
    header("Location: main.php");
    exit();
}

mysqli_close($db);
?>
