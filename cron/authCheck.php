<?php

class Cron {
    public function __construct() {
        
    }

    public function isLoginExpired($expirationDate) {
        $currentDateTime = new DateTime();
        $expirationDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $expirationDate);

        if (isset($_COOKIE['auth_token'])) {
            $auth_token = $_COOKIE['auth_token'];
        
            if (isset($auth_token)) {
                // token is valid
            } else { 
                $this->logout();
            }
        } else {
            $this->logout();
        }

        return $currentDateTime < $expirationDate;
    }

    public function logout() {
        header("Location: /login.php");
        exit();
    }
}

if (isset($_COOKIE['auth_token'])) {
    $newCron = new Cron();
    $newCron->isLoginExpired($_COOKIE['auth_token']);
}

?>