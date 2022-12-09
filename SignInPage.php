<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css"/>
    <title>Document</title>
    
</head>
<body>
    <form action="signIn.php" method="post">
        <label>E-mail</label>
        <input type="email" name="userEmail" id="">
        <label>Password</label>
        <input type="password" name="userPassword" id="">
        <input type="submit" value="OK">
        <?php
            // if(isset($_SESSION['signInError'])) {
            //     echo "<p style='color: red'>Niepoprawy login lub hasło!</p>";
            // }
        ?>
    </form>
</body>