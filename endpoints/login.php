<?php

include("database.php");

class Login extends Database {
    public function myFunction() {
        return "login";
    }
}

if(isset($_POST['action']) && $_POST['action'] == 'login') {
    $newLogin = new Login;
    $result = $newLogin->myFunction();
    echo $result;
}

?>