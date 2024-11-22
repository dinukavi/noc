<?php
// delete_request.php

include 'connect.php';

if (isset($_GET['id'])) {
    $username = $_GET['id'];

    $sql = "DELETE FROM registration WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        header("Location: view_reg_users.php?message=User deleted successfully.");
        exit();
    } else {
        echo "Error: Could not delete user.";
    }

    $stmt->close();
} else {
    echo "Invalid request. No ID provided.";
}

$conn->close();
?>
