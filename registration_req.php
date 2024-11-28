<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    // Sanitize and validate inputs
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $position = htmlspecialchars(trim($_POST['position']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $address = htmlspecialchars(trim($_POST['address']));
    $institute = htmlspecialchars(trim($_POST['institute']));
    $instituteCode = htmlspecialchars(trim($_POST['instituteCode']));
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?message=Invalid email format");
        exit();
    }




    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_me'])) {
        $hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sql = "INSERT INTO registration (firstName, lastName, email, username, password, role) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['username'], $hashedPassword, $_POST['role']);
        if ($stmt->execute()) {
            header("Location: signup.php?message=Registration successful.");
        } else {
            echo "Error: Could not register user.";
        }
    }
    




    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($username) && !empty($password)) {
        $password = password_hash($password, PASSWORD_BCRYPT);

        $sql = $conn->prepare("INSERT INTO registration (firstName, lastName, position, gender, email, mobile, telephone, address, institute, instituteCode, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssssssssss", $firstName, $lastName, $position, $gender, $email, $mobile, $telephone, $address, $institute, $instituteCode, $username, $password);

        if ($sql->execute()) {
            header("Location: signup.php?message=Request sent successfully");
        } else {
            header("Location: signup.php?message=Error: Could not process your request");
        }

        $sql->close();
        $conn->close();
        exit();
    } else {
        header("Location: signup.php?message=Please fill in all required fields");
    }
}
?>
