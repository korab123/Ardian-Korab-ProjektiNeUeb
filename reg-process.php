<?php
// Add error reporting at the beginning of the file
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include necessary files
require_once 'db-config.php'; // Include the db-config.php file
require_once 'UserRegistration.php';

class RegistrationProcessor {
    private $userRegistration;

    public function __construct(UserRegistration $userRegistration) {
        $this->userRegistration = $userRegistration;
    }

    public function processRegistration() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Emri = $_POST['Emri'];
            $Mbiemri = $_POST['Mbiemri'];
            $Email = $_POST['Email'];
            $isAdmin = ($Email === 'admin1@gmail.com') ? 1 : 0;
            $Password = $_POST['Password'];

            // Instantiate objects and process registration
            $databaseConnection = new DatabaseConnection();
            $databaseConnection->startConnection();

            $userRegistration = new UserRegistration($databaseConnection);

            $registrationSuccess = $userRegistration->registerUser($Emri, $Mbiemri, $Email, $Password, $isAdmin);

            // Close the database connection
            $databaseConnection->closeConnection();

            if ($registrationSuccess) {
                header("Location: main-page.php");
                exit();
            } else {
                echo "Registration failed!";
            }
        } else {
            header("Location: reg-page.php");
            exit();
        }
    }
}

// Instantiate the RegistrationProcessor and process the registration
$registrationProcessor = new RegistrationProcessor(new UserRegistration(new DatabaseConnection()));
$registrationProcessor->processRegistration();
?>
