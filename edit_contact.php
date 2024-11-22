<?php
include_once('header.php');

include 'connect.php';

if (isset($_GET['id'])) {
    $contactId = $conn->real_escape_string($_GET['id']);

    $query = "SELECT * FROM contactlist WHERE contactId = '$contactId'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $contact = $result->fetch_assoc();
    } else {
        header("Location: contact_list.php?message=Contact not found");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $institute = $conn->real_escape_string($_POST['Institute']);
    $instCode = $conn->real_escape_string($_POST['InstCode']);
    $uName = $conn->real_escape_string($_POST['UName']);
    $instEmail = $conn->real_escape_string($_POST['InstEmail']);
    $personalEmail = $conn->real_escape_string($_POST['PersonalEmail']);
    $nocEmail = $conn->real_escape_string($_POST['NocEmail']);
    $mobile = $conn->real_escape_string($_POST['Mobile']);
    $telephone = $conn->real_escape_string($_POST['Telephone']);
    $designation = $conn->real_escape_string($_POST['Designation']);

    $sql = "UPDATE contactlist SET 
                Institute='$institute', 
                InstCode='$instCode', 
                UName='$uName', 
                InstEmail='$instEmail', 
                PersonalEmail='$personalEmail', 
                NocEmail='$nocEmail', 
                Mobile='$mobile', 
                Telephone='$telephone', 
                Designation='$designation' 
            WHERE contactId='$contactId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact_list.php?message=Contact updated successfully");
    } else {
        echo "Error updating contact: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Contact</title>
</head>
<body>
    <div class="signup-box border row align-items-center position-absolute top-100 start-50 translate-middle row align-items-center">
    <h1>Edit Contact</h1>
        <form method="POST" action="" class=" row g-3 card-body col-md-5 mb-7" style=" align-content:center; padding-top:30px; padding-bottom:40px; padding-left:50px; padding-right:40px;">
        
        <label>Institute:</label>
        <input type="text" name="Institute" value="<?php echo htmlspecialchars($contact['Institute']); ?>" required><br>

        <label>InstCode:</label>
        <input type="text" name="InstCode" value="<?php echo htmlspecialchars($contact['InstCode']); ?>" required><br>

        <label>UName:</label>
        <input type="text" name="UName" value="<?php echo htmlspecialchars($contact['UName']); ?>" required><br>

        <label>InstEmail:</label>
        <input type="email" name="InstEmail" value="<?php echo htmlspecialchars($contact['InstEmail']); ?>" required><br>

        <label>PersonalEmail:</label>
        <input type="email" name="PersonalEmail" value="<?php echo htmlspecialchars($contact['PersonalEmail']); ?>" required><br>

        <label>NocEmail:</label>
        <input type="email" name="NocEmail" value="<?php echo htmlspecialchars($contact['NocEmail']); ?>" required><br>

        <label>Mobile:</label>
        <input type="text" name="Mobile" value="<?php echo htmlspecialchars($contact['Mobile']); ?>" required><br>

        <label>Telephone:</label>
        <input type="text" name="Telephone" value="<?php echo htmlspecialchars($contact['Telephone']); ?>" required><br>

        <label>Designation:</label>
        <input type="text" name="Designation" value="<?php echo htmlspecialchars($contact['Designation']); ?>" required><br>

        <input type="submit" value="Update Contact" class="btn btn-success">
    </form>
    </div>
</body>
</html>
