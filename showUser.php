<?php
include_once 'db-config.php';

// Create a DatabaseConnection instance
$databaseConnection = new DatabaseConnection();
$databaseConnection->startConnection(); // Establish database connection

// Create an instance of ShowUsers
$showUsers = $databaseConnection->showUsers();

// Get all users
$users = $showUsers->getAllUsers();
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['Emri']; ?></td>
                <td><?php echo $user['Mbiemri']; ?></td>
                <td><?php echo $user['Email']; ?></td>
                <!-- Add more columns as needed -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
