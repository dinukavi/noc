<?php
include('connect.php');

if (isset($_GET['id'])) {
    $Nno = $_GET['id'];

    $delete_query = "DELETE FROM networkdetails WHERE Nno = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $Nno);

    if ($stmt->execute()) {
        header("Location: network_details.php?message=Network record deleted successfully");
    } else {
        header("Location: network_details.php?message=Error deleting record: " . $conn->error);
    }
    exit;
} else {
    header("Location: network_details.php?message=Invalid request");
    exit;
}
?>
