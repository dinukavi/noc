<?php
include_once('header.php');

include 'connect.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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

    $sql = "INSERT INTO contactlist (Institute, InstCode, UName, InstEmail, PersonalEmail, NocEmail, Mobile, Telephone, Designation) 
            VALUES ('$institute', '$instCode', '$uName', '$instEmail', '$personalEmail', '$nocEmail', '$mobile', '$telephone', '$designation')";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact_list.php?message=Contact added successfully");
        exit();
    } else {
        echo "Error adding contact: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Contact</title>
</head>
<body>
    <div class="signup-box border row align-items-center position-absolute top-100 start-50 translate-middle row align-items-center">
        <form method="POST" action="" class=" row g-3 card-body col-md-5 mb-7" style=" align-content:center; padding-top:40px; padding-bottom:40px; padding-left:50px; padding-right:40px;">
            <input type="hidden" name="username" value="<?php echo htmlspecialchars($user['username']); ?>">
            <h2>Add New Contact</h2>
            <label>Institute:</label>
            <input type="text" name="Institute" required><br>

            <label>InstCode:</label>
            <input type="text" name="InstCode" required><br>

            <label>UName:</label>
            <input type="text" name="UName" required><br>

            <label>InstEmail:</label>
            <input type="email" name="InstEmail" required><br>

            <label>PersonalEmail:</label>
            <input type="email" name="PersonalEmail" required><br>

            <label>NocEmail:</label>
            <input type="email" name="NocEmail" required><br>

            <label>Mobile:</label>
            <input type="text" name="Mobile" required><br>

            <label>Telephone:</label>
            <input type="text" name="Telephone" required><br>

            <label>Designation:</label>
            <input type="text" name="Designation" required><br>

            <input type="submit" value="Add Contact" class="btn btn-success">



    </form>
    </div>
</body>
</html>
