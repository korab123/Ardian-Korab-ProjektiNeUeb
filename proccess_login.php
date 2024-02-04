<?php
require_once 'db-config.php';
require_once 'UserLogin.php';

// Instantiate DatabaseConnection
$databaseConnection = new DatabaseConnection();
$databaseConnection->startConnection();

class LoginProcessor {
    private $userLogin;
    private $databaseConnection;  

    public function __construct(UserLogin $userLogin, DatabaseConnection $databaseConnection) {
        $this->userLogin = $userLogin;
        $this->databaseConnection = $databaseConnection;  // Add this line
    }

    public function processLogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $loginEmail = $_POST["login-email"];
            $loginPassword = $_POST["login-password"];

            // Instantiate UserLogin with the database connection
            $userLogin = new UserLogin($this->databaseConnection);  // Modify this line

            $user = $userLogin->authenticateUser($loginEmail, $loginPassword);

            if ($user) {
                $isAdmin = $user['is_admin'] == 1;

                // Start the session
                session_start();

                // Set the session variable with the user's email
                $_SESSION['user_email'] = $user['Email'];

                if ($isAdmin) {
                    header("Location: main-page.php");
                    exit();
                } else {
                    header("Location: main-page.php");
                    exit();
                }
            } else {
                echo '<script>alert("Incorrect email or password. Please sign up to create an account.");</script>';
            }
        } else {
            header("Location: reg-page.php");
            exit();
        }
    }
}

$userLogin = new UserLogin($databaseConnection);
$loginProcessor = new LoginProcessor($userLogin, $databaseConnection);  // Modify this line
$loginProcessor->processLogin();

$databaseConnection->closeConnection();
?>
