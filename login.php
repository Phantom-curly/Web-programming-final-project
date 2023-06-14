<?php
$user = 'root';
$pass = 'Toshtemirov04*';
$db = 'web_project';
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password fields are not empty
    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM users_login_info WHERE Username='$username' AND Password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) > 0) {
            header("Location: main.php");
            exit();
        } else {
            header("Location: login_page.php?verified=false");
            exit();
        }
    } else {
        header("Location: login_page.php?empty_fields=true");
        exit();
    }
}

mysqli_close($db);
?>
