<?php

class Database {
    private $server = "localhost";
    private $username = "testUser";
    private $password = "j2(%NJFF@a2mBxv";
    private $database = "database";
    private $connection;

    public function __construct() {
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database);
    }

    /**
     * Execute an SQL query securely with support for different types of parameters.
     *
     * @param string $sql The SQL query to be executed.
     * @param array $params An optional array of parameters. Each parameter is represented as an associative array
     *                      containing 'value' and 'type' keys. 'value' holds the actual parameter value, and 'type'
     *                      indicates the parameter type ('i' for integer, 's' for string, 'd' for double, 'b' for blob).
     *                      Example: [['value' => 10, 'type' => 'i'], ['value' => 'John', 'type' => 's']]
     * @return array An array containing the fetched results, or an empty array if no results are returned.
     */

    public function query($sql, $params = []) {
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

    public function getUserIdfromToken($token) {
        $params = [
            ['value' => $token, 'type' => 's'],
        ];

        $sql = "SELECT user_id
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getAccessLevel($userId) {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT user_id
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;

    }

    public function getUserEmail($userId) {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT email
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserName($userId) {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT username
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserLast_Login($userId) {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT last_login
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserCreationDate($userId) {
        $params = [
            ['value' => $userId, 'type' => 's'],
        ];

        $sql = "SELECT created_at
        FROM tokens
        WHERE auth_token = ?";

        $result = $this->query($sql, $params);

        return $result;
    }

    public function getUserProfilePicture($userId) {
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

?>
