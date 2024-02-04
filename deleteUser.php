<?php
class DeleteUser {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function deleteUser($user_id) {
        try {
            // Delete user from the database
            $stmt = $this->conn->prepare("DELETE FROM user WHERE id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();

            // Redirect back to the dashboard or show success message
            header("Location: dashboard.php");
            exit();
        } catch (PDOException $e) {
            // Handle errors
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
