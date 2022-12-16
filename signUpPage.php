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
    <input type="text" name="haslo1">
    <label>Powtórz hasło:</label>
    <input type="text" name="haslo2">
    <input type="submit" value="Ok">
    <?php
    session_start();
    mysql_connect("localhosst", "admin", "haslo");
    mysql_select_db("baza");
    
    function filtr($zmienna) {
        if(get_magic_quotes_gpc())
            $zmienna = stripslashes($zmienna);
        return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
        }
        if (isset($_POST['rejestruj'])) {
            $login = filtr($_POST['name']);
            $email = filtr($_POST['email']);
            $haslo1 = filtr($_POST['haslo1']);
            $haslo2 = filtr($_POST['haslo2']);
            if (mysql_num_rows(mysql_query("Select login FROM php_projekt WHERE login = '".$login"';")) == 0) {
                if ($haslo1 == $haslo2) {
                    // mysql_query("INSERT INTO 'uzytkownicy' (login, email, haslo)")
                }
            }
        }
    ?>
</form>
</body>
</html>