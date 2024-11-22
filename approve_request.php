<?php
// approve_request.php

include 'connect.php';

if (isset($_GET['id'])) {
    $username = $_GET['id'];
    
    // Debugging: Display the received username
    echo "Received Username: " . htmlspecialchars($username) . "<br>";

    $sql = "SELECT * FROM registration WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "Rows Found: " . $result->num_rows . "<br>";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $insertSql = "INSERT INTO users (firstName, lastName, email, mobile, telephone, position, institute, instituteCode, username, password, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param(
            "sssssssssss",
            $row['firstName'],
            $row['lastName'],
            $row['email'],
            $row['mobile'],
            $row['telephone'],
            $row['position'],
            $row['institute'],
            $row['instituteCode'],
            $row['username'],
            $row['password'],
            $row['role']
        );

        if ($insertStmt->execute()) {
            $deleteSql = "DELETE FROM registration WHERE username = ?";
            $deleteStmt = $conn->prepare($deleteSql);
            $deleteStmt->bind_param("s", $username);
            $deleteStmt->execute();

            header("Location: view_users.php?message=User approved successfully.");
            exit();
        } else {
            echo "Error: Could not approve user.";
        }
    } else {
        echo "Error: User not found in registration table with username: " . htmlspecialchars($username);
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request. No ID provided.";
}
