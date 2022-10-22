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