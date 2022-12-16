<?php   
    session_start();
    require_once"mainClass.php";
    // $connection = new mysqli($host, $db_user, $db_password, $db_name);
    $mainClass = new MainClass();
    $connection = $mainClass -> dbConnect();

    if($connection -> connect_errno == 0) {
<<<<<<< HEAD
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");
=======
        $userName = htmlentities($_POST['name'], ENT_QUOTES, "UTF-8");
        $userEmail = htmlentities($_POST['userEmail'], ENT_QUOTES, "UTF-8");
        $userPassword = htmlentities($_POST['userPassword'], ENT_QUOTES, "UTF-8");
        $userPassword2 = htmlentities($_POST['userPassword2'], ENT_QUOTES, "UTF-8");
>>>>>>> efe7a08cb38bdf438b4e35e8554cc6de449749f2

        $sql =sprintf(
        "SELECT * FROM php_projekt WHERE email='$userEmail' AND haslo='$userPassword'",
        mysqli_real_escape_string($connection, $userEmail),
<<<<<<< HEAD
        mysqli_real_escape_string($connection, $userPassword));

        if($result = $connection -> query($sql)) {
            if($result -> num_rows > 0) {
                $data = $result -> fetch_assoc();
                $user = $data['login'];
                $email = $data['email'];
                $_SESSION['signedIn'] = true;
                unset($_SESSION['signInError']);
                header('Location: index.php');
                
                $result -> close();
            } else {
                header('Location: signInPage.php');
                $_SESSION['signInError'] = true;
=======
        mysqli_real_escape_string($connection, $userPassword)
    );

        if($result = $connection -> query($sql)) {
            if($result -> num_rows > 0) {
                echo "użytkownik już istnieje";
            }
            else {
                if($userPassword == $userPassword2) {
                    if(strlen($userPassword) >= 8)
                        $sql = "INSERT INTO php_projekt(ID, login, haslo, email) VALUES ('', '$userName', '$userPassword', '$userEmail')";
                        $result = $connection -> query($sql);
                        echo "Rejestracja powiodła się";
                        header('Location: index.php');
                    else {
                        echo "Hasło nie posiada odpowiedniej ilości zanków [8]";
                    }
                }
                else{
                    echo "Podane hasła nie są identyczne";
                }
>>>>>>> efe7a08cb38bdf438b4e35e8554cc6de449749f2
            }
        }
    }
?>