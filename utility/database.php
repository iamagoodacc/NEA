<?php

require '/configuration/loadEnv.php';
class Database
{
    private $server;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct()
    {
        $this->server = getenv('DB_KEY');
        $this->username = getenv('DB_USERNAME');
        $this->password = getenv('DB_PASSWORD');
        $this->database = getenv('DB_NAME');
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }


    public function query($sql, $params = [])
    {
        $statement = $this->connection->prepare($sql);

        if (!$statement) {
            echo "Error in preparing statement: " . $this->connection->error;
            exit();
        }

        if (!empty($params)) {
            $types = '';
            $values = [];

            foreach ($params as $param) {
                $types .= $param['type'];
                $values[] = $param['value'];
            }

            $statement->bind_param($types, ...$values);
        }

        $statement->execute();
        $result = $statement->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $statement->close();

        echo json_encode($data);
        return $result;
    }

    public function getUserIdfromToken($token)
    {
        $params = [
            ['value' => $token, 'type' => 's'],
        ];

        $sql = "SELECT user_id
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getAccessLevel($userId)
    {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT user_id
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserEmail($userId)
    {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT email
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserName($userId)
    {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT username
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserLast_Login($userId)
    {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT last_login
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserCreationDate($userId)
    {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT created_at
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserProfilePicture($userId)
    {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT profile_picture
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }
}
