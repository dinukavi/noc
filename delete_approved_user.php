<?php
include 'connect.php';

// Check if 'id' parameter is set in URL
if (isset($_GET['id'])) {
    // Get the username from the URL
    $username = $conn->real_escape_string($_GET['id']);
    
    // SQL query to delete the user
    $sql = "DELETE FROM users WHERE username = '$username'";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the view_users.php with a success message
        header("Location: view_users.php?message=User deleted successfully");
    } else {
        // Redirect back to the view_users.php with an error message
        header("Location: view_users.php?message=Error deleting user: " . $conn->error);
    }
} else {
    // Redirect if 'id' is not set
    header("Location: view_users.php?message=No user specified for deletion");
}

// Close connection
$conn->close();
exit();
?>
