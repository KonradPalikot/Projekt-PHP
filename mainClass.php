<?php
class MainClass {
    public function dbConnect() {
        require_once"config.php";
        return new mysqli($host, $db_user, $db_password, $db_name);
    }

    public function blockEntrace($move_to) {
        if(isset($_SESSION["signedIn"])==False){
            header("Location:" $move_to)
        } 
    }
}
?>
