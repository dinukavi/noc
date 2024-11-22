<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $username = $conn->real_escape_string($_GET['id']);
    
    // Fetch the user details
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        header("Location: view_users.php?message=User not found");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = $conn->real_escape_string($_POST['uid']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $telephone = $conn->real_escape_string($_POST['telephone']);
    $position = $conn->real_escape_string($_POST['position']);
    $institute = $conn->real_escape_string($_POST['institute']);
    $instituteCode = $conn->real_escape_string($_POST['instituteCode']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $role = $conn->real_escape_string($_POST['role']);
    
    $sql = "UPDATE users SET 
                firstName='$firstName', 
                lastName='$lastName', 
                email='$email', 
                mobile='$mobile', 
                telephone='$telephone', 
                position='$position', 
                institute='$institute', 
                instituteCode='$instituteCode', 
                username='$username',
                password='$password', 
                role='$role'
            WHERE uid='$uid'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: view_users.php?message=User updated successfully");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
        include_once '../GUI/header.php';
    ?>


    <div class="signup-box border row align-items-center position-absolute top-100 start-50 translate-middle row align-items-center">
        <form method="POST" action="edit_approved_user.php" class="row g-3 card-body col-md-5 mb-7" style=" align-content:center; padding-top:40px; padding-bottom:40px; padding-left:50px; padding-right:40px;">
            <input type="hidden" name="username" value="<?php echo htmlspecialchars($user['username']); ?>">
        <h2>Edit User Details</h2>
            <div class="col-2">
                <label>User ID:</label><br>
                <input type="text" class="form-control" name="uid" value="<?php echo htmlspecialchars($user['uid']); ?>" readonly required><br>
            </div>
            <div class="col-md-4">
                <label>First Name:</label><br>
                <input type="text" class="form-control" name="firstName" value="<?php echo htmlspecialchars($user['firstName']); ?>" readonly required><br>
            </div>
            <div class="col-md-6">
                <label>Last Name:</label><br>
                <input type="text" class="form-control" name="lastName" value="<?php echo htmlspecialchars($user['lastName']); ?>" readonly required><br>
            </div>
            <div class="col-12">
                <label>Email:</label><br>
                <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly  required><br>
            </div>
            <div class="col-md-6">
                <label>Mobile:</label><br>
                <input type="text" class="form-control" name="mobile" value="<?php echo htmlspecialchars($user['mobile']); ?>" required><br>
            </div>
            <div class="col-md-6">
                <label>Telephone:</label><br>
                <input type="text" class="form-control" name="telephone" value="<?php echo htmlspecialchars($user['telephone']); ?>" required><br>
            </div>
            <div class="col-md-12">
                <label>Position:</label><br>
                <input type="text" class="form-control" name="position" value="<?php echo htmlspecialchars($user['position']); ?>" required><br>
            </div>
            <div class="col-md-8">
                <label>Institute:</label><br>
                <input type="text" class="form-control" name="institute" value="<?php echo htmlspecialchars($user['institute']); ?>" required><br>
            </div>
            <div class="col-md-4">
                <label>Institute Code:</label><br>
                <input type="text" class="form-control" name="instituteCode" value="<?php echo htmlspecialchars($user['instituteCode']); ?>" required><br>
            </div>
            <div class="col-md-5">
                <label>Username:</label><br>
                <input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($user['username']); ?>"readonly required><br>
            </div>
            <div class="col-md-7">
                <label>Password:</label><br>
                <input type="password" class="form-control" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" readonly  required><br>
            </div>
            <div class="col-md-12">
                <label>Role:</label><br>
                <input type="text" class="form-control" name="role" value="<?php echo htmlspecialchars($user['role']); ?>" required><br>
            </div>
            <div class="col-md-5">
                <button type="submit" name="updateApprovedUser" class="btn btn-success" value="Update User">Update User</button>
                <a href="view_users.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
