<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style rel="stylesheet" href="style.scss"></style>
    <title>Rejestracja</title>
</head>
<body>
<form method="POST" action="signUpPage.php">
    <label>Nazwa użytkownika:</label>
    <input type="text" name="name">
    <label>Email:</label>
    <input type="email" name="email">
    <label>Hasło:</label>
    <input type="text" name="haslo">
    <input type="submit" value="Ok">
</form>
    <?php
    session_start();
    require_once"config.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if($connection -> connect_erron == 0) {
        $userEmail = $_POST["email"];
        $userPassword = $_POST['haslo'];

    $sql = "SELECT * FROM php_projekt WHERE email='email' AND password='haslo';";


    if($result = $connection -> query($sql)) {
        if($result -> num_rows > 0) {
            $data = $result -> fetch_assoc();
            $user = $data['name'];
            $email = $data['email'];
            $_SESSION['signedIn'] = true;
            unset($_SESSION['signInError']);
            header('Location: index.php')

            $result -> close();
        } else {
            header('Location: signInPage.php');
            $_SESSION['signInError'] = true;
        }

    }
    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<p>Nazwa użytkownika: $name</p>"; 
    }
    else {
        echo "<p>Nie podano nazwy użytkownika</p>";
    }
    if(isset($_GET['email'])) {
        $nazwa = $_GET['email'];
        echo "<p>Nazwa użytkownika: $email</p>";
    }
    else {
        echo "<p>Nie podano emaila</p>";
    }
    if(isset($_GET['haslo'])) {
        echo "<p>Hasło: </p>";
    }
    else {
        echo "<p>Nie podano hasła</p>";
    }
    
    ?>
</body>
</html>