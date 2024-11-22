<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $contactId = $conn->real_escape_string($_GET['id']);

    $sql = "DELETE FROM contactlist WHERE contactId = '$contactId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact_list.php?message=Contact deleted successfully");
    } else {
        header("Location: contact_list.php?message=Error deleting contact: " . $conn->error);
    }
} else {
    header("Location: contact_list.php?message=No contact specified for deletion");
}

$conn->close();
exit();
?>
