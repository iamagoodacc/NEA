<?php

include('database.php');

class Cookie extends Database {

    public function __construct() {
    }

    public function generateAuthToken() {
        $token = bin2hex(random_bytes(32));

        return $token;
    }

    public function getUser() {
        $sql = "";
    }

    public function setCookie() {
        $authToken = $this->generateAuthToken();
        $expiration = time() + (3600*24);
        $getUserId = $this->getUserIdfromToken($authToken);

        setcookie("auth_token", $this->$authToken, $expiration, "/");

        $sql = "INSERT INTO tokens (auth_token, expiration, user_id)
        VALUES ($authToken, $expiration, $getUserId);
        ";

        $this->query($sql);
    }
}
?>
