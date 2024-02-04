<?php
class EditUser {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function updateUser($user_id_edit, $new_name, $new_surname, $new_email, $new_password) {
        try {
            $stmt = $this->conn->prepare("UPDATE signform SET Emri = :new_name, Mbiemri = :new_surname, Email = :new_email, Password = :new_password WHERE id = :user_id_edit");
            $stmt->bindParam(':user_id_edit', $user_id_edit);
            $stmt->bindParam(':new_name', $new_name);
            $stmt->bindParam(':new_surname', $new_surname);
            $stmt->bindParam(':new_email', $new_email);
            $stmt->bindParam(':new_password', $new_password);
            $stmt->execute();

            header("Location: main-page.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
