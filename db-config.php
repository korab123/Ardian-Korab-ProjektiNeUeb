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

    public function insertUser(User $user) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO user (Emri, Mbiemri, Email, Password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$user->getEmri(), $user->getMbiemri(), $user->getEmail(), $user->getPassword()]);
            return true;
        } catch (PDOException $e) {
            echo "Error adding user: " . $e->getMessage();
            return false;
        }
    }
    // Change the table name in the SQL query
    public function insertContactFormData(ContactUs $contactUs) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO `contact-us` (`Full-Name`, `Email`, `Company`, `Phone`, `Comment`) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$contactUs->getFullName(), $contactUs->getEmail(), $contactUs->getCompany(), $contactUs->getPhone(), $contactUs->getComment()]);
            return true;
        } catch (PDOException $e) {
            echo "Error adding contact form data: " . $e->getMessage();
            return false;
        }
    }
    public function insertNewsletterEmail(Newsletter $newsletter)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO news-letter (Email) VALUES (?)");
            $stmt->execute([$newsletter->getEmail()]);
            return true;
        } catch (PDOException $e) {
            echo "Error adding newsletter email: " . $e->getMessage();
            return false;
        }
    }

}
?>