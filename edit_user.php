<?php
// Include database connection
include 'connect.php';

// Check if the form has been submitted
if (isset($_POST['updateUser'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['Gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address']; // Fix here
    $position = $_POST['position'];
    $institute = $_POST['institute'];
    $instituteCode = $_POST['instituteCode'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "UPDATE registration SET firstName = ?, lastName = ?, gender = ?, email = ?, address = ?, mobile = ?, role = ?, institute = ?, instituteCode = ?, username = ?, password = ?, telephone = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssssssssss", $firstName, $lastName, $gender, $email, $address, $mobile, $role, $institute, $instituteCode, $username, $password, $telephone, $username);

    if ($stmt->execute()) {
        header("Location: view_reg_users.php?message=User+updated+successfully");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }

    $stmt->close();
} elseif (isset($_GET['id'])) {
    $username = $_GET['id'];
    $sql = "SELECT * FROM registration WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username); // Correct bind_param
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
} else {
    echo "No username provided.";
    exit;
}

$conn->close();
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
        require_once 'header.php';
    ?>

<div class="signup-box border row align-items-center position-absolute top-100 start-50 translate-middle row align-items-center">
    <form method="POST" action="edit_user.php" class=" row g-3 card-body col-md-5 mb-7" style=" align-content:center; padding-top:40px; padding-bottom:40px; padding-left:50px; padding-right:40px;">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($user['username']); ?>">
        <h2>Edit User</h2>
       
            <div class="col-md-5">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo htmlspecialchars($user['firstName']); ?>" readonly>
            </div>
            <div class="col-md-7">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo htmlspecialchars($user['lastName']); ?>" readonly>
            </div>
            <div class="col-md-3">
                <label for="gender" class="form-label">Gender</label><br>
                <input type="radio" id="male" name="Gender" value="male" class="form-check-input" <?php echo ($user['gender'] == 'male') ? 'checked' : ''; ?>>
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="Gender" value="female" class="form-check-input" <?php echo ($user['gender'] == 'female') ? 'checked' : ''; ?>>
                <label for="female">Female</label>
            </div>
            <div class="col-md-9">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo htmlspecialchars($user['mobile']); ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label">Telephone Number</label>
                <input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo htmlspecialchars($user['telephone']); ?>" readonly>
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo htmlspecialchars($user['address']); ?>" readonly>
            </div>
            <div class="col-12">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" name="position" id="position" value="<?php echo htmlspecialchars($user['position']); ?>" readonly>
            </div>
            <div class="col-md-8">
                <label for="institute" class="form-label">Institute Name</label>
                <select name="institute" id="institute" class="form-select">
                    <option value="<?php echo htmlspecialchars($user['institute']); ?>" selected><?php echo htmlspecialchars($user['institute']); ?></option>
                    <option>University of Peradeniya</option>
                    <option>University of Moratuwa</option>
                    <option>University of Jaffna</option>
                    <option>University of Jayawardanapura</option>
                    <option>Easten University</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="instituteCode" class="form-label">Institute Code</label>
                <input type="text" class="form-control" name="instituteCode" id="instituteCode" value="<?php echo htmlspecialchars($user['instituteCode']); ?>">
            </div>
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo htmlspecialchars($user['username']); ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="password" value="<?php echo htmlspecialchars($user['password']); ?>">
            </div>
            <div class="col-md-6">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" name="role" id="role" value="<?php echo htmlspecialchars($user['role']); ?>">
            </div>
        
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary" name="updateUser">Update</button>
        </div>
    </form>
</div>
</body>
</html>
