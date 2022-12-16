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
<form method="POST" action="SignUp.php">
    <label>Nazwa użytkownika:</label>
    <input type="text" name="userName">
    <label>Email:</label>
    <input type="email" name="userEmail">
    <label>Hasło:</label>
    <input type="text" name="userPassword">
    <label>Powtórz hasło:</label>
    <input type="text" name="userPassword2">
    <input type="submit" value="Ok">
    <a href="index.php">Powrót</a>
</form>
</body>
</html>