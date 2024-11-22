<?php
// Set session cookie parameters to expire in 60 seconds
session_set_cookie_params(60); // 60 seconds

// Start the session
session_start();

// Check if user is not logged in or session has expired, redirect to login page with message
if (!isset($_SESSION['username']) || (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60))) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    $message = "Session expired. Please login again.";
    header("Location: ../GUI/login.php?message=" . urlencode($message)); // Redirect to login page with message
    exit;
}

// Update last activity time stamp
$_SESSION['LAST_ACTIVITY'] = time();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>

    <?php
        require_once '../GUI/header.php';
    ?>

    <h1>Welcome <?php echo $_SESSION['networkcontacts']; ?></h1>
    <h2><a href="../codes/logout.php">Logout</a></h2>

    <?php
    require_once '../GUI/footer.php';
    ?>
</body> 

</html>
