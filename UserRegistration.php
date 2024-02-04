<?php

class UserRegistration {
    private $db;

    public function __construct(DatabaseConnection $db) {
        $this->db = $db;
    }

    public function registerUser($Emri, $Mbiemri, $Email, $Password, $isAdmin) {
        try {
            $passwordHash = password_hash($Password, PASSWORD_BCRYPT);
            $stmt = $this->db->getConnection()->prepare("INSERT INTO user (Emri, Mbiemri, Email, Password, isAdmin) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$Emri, $Mbiemri, $Email, $passwordHash, $isAdmin]);

            return true;
        } catch (PDOException $e) {
            echo "Error adding user: " . $e->getMessage();
            return false;
        }
    }
}
?>
