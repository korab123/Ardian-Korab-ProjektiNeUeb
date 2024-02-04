<?php
session_start();

require_once 'db-config.php';
require_once 'newsletter.php';  

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email from the POST data
    $email = $_POST['newsletter_email'];

    // Simple validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle validation error, e.g., redirect back to the form with an error message
        $_SESSION['subscription_error'] = "Invalid email format";
        header("Location: main-page.php");
        exit();
    }

    // Instantiate the DatabaseConnection object
    $databaseConnection = new DatabaseConnection();

    try {
        // Start the database connection
        $databaseConnection->startConnection();

        // Instantiate the Newsletter object
        $newsletter = new Newsletter($email);

        // Process the subscription
        $subscriptionSuccess = $databaseConnection->insertNewsletterEmail($newsletter);

        // Debugging statement
        if ($subscriptionSuccess) {
            // Subscription successful
            $_SESSION['subscription_success'] = true;
        } else {
            // Subscription failed
            $_SESSION['subscription_error'] = "Subscription failed. Please try again.";
        }

    } catch (PDOException $e) {
        // Capture the error message
        $_SESSION['subscription_error'] = "PDO Error: " . $e->getMessage();
    } finally {
        // Close the database connection
        $databaseConnection->closeConnection();
    }

    // Redirect back to the main page
    header("Location: main-page.php");
    exit();
}
?>
