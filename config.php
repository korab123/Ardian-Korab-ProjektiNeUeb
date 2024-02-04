<?php
class DatabaseConnection {
    private $host = "localhost";
    private $username = "user1";
    private $password = "pass";
    private $db = "celestial-ueb";
    private $conn;

    public function startConnection() {
        try {
            $port = 3390;  // Set your desired port
            $this->conn = new PDO("mysql:host=$this->host;port=$port;dbname=$this->db", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            exit("Connection failed. Please check the database connection details.");
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>
yy