<?php
// Add error reporting at the beginning of the file
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include necessary files
require_once 'db-config.php'; // Include the db-config.php file
require_once 'contact-us.php'; // Include the ContactUs.php file

class ContactFormProcessor {
    private $databaseConnection;

    public function __construct(DatabaseConnection $databaseConnection) {
        $this->databaseConnection = $databaseConnection;
    }

    public function processContactForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullName = $_POST['fullName'];
            $company = $_POST['company'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $comment = $_POST['comment'];

            // Instantiate ContactUs object
            $contactUs = new ContactUs($fullName, $email, $company, $phone, $comment);

            // Process the contact form
            $this->databaseConnection->startConnection();

            $contactFormSuccess = $this->databaseConnection->insertContactFormData($contactUs);

            // Close the database connection
            $this->databaseConnection->closeConnection();

            if ($contactFormSuccess) {
                // Redirect to a success page or do further processing
                header("Location: contact-page.php");
                exit();
            } else {
                echo "Contact form submission failed!";
            }
        } else {
            // Redirect to the contact form page
            header("Location: contact-page.php");
            exit();
        }
    }
}

// Instantiate the ContactFormProcessor and process the contact form
$contactFormProcessor = new ContactFormProcessor(new DatabaseConnection());
$contactFormProcessor->processContactForm();
?>
