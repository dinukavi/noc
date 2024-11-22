<?php
include 'connect.php';

if (isset($_GET['username'])) {
    $userName = $_GET['username'];

    
    $sql = "DELETE FROM registration WHERE username = '$userName'";

    if ($conn->query($sql) === TRUE) {
        echo "Request deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
