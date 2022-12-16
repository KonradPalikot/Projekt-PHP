<?php   
    session_start();
    require_once"mainClass.php";
    // $connection = new mysqli($host, $db_user, $db_password, $db_name);
    $mainClass = new MainClass();
    $connection = $mainClass -> dbConnect();

    if($connection -> connect_errno == 0) {
        $userName = htmlentities($_POST['userName'], ENT_QUOTES, "UTF-8");
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");
        $userPassword2 = htmlentities($_POST['userPassword2'], ENT_QUOTES, "UTF-8");

        $sql =sprintf(
            "SELECT * FROM php_projekt WHERE email='$userEmail' AND haslo='$userPassword'",
            mysqli_real_escape_string($connection, $userEmail),
            mysqli_real_escape_string($connection, $userPassword)
        );

        if($result = $connection -> query($sql)) {
            if($result -> num_rows > 0) {
                echo "użytkownik już istnieje";
            }
            else {
                if($userPassword == $userPassword2) {
                    if(strlen($userPassword) >= 8) {
                        $sql = "INSERT INTO php_projekt(ID, login, haslo, email) VALUES (null, '$userName', '$userPassword', '$userEmail')";
                        $result = $connection -> query($sql);
                        echo "Rejestracja powiodła się";
                        // header('Location: index.php');
                    } else {
                        echo "Hasło nie posiada odpowiedniej ilości zanków [8]";
                    }
                }
                else{
                    echo "Podane hasła nie są identyczne";
                }
            }
        }
    }
?>