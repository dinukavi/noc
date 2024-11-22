

<?php
// Set session cookie parameters to expire in 60 seconds
session_set_cookie_params(3600); // 3600 seconds

// Start the session
session_start();

// Check if user is not logged in or session has expired, redirect to login page with message
if (!isset($_SESSION['username']) || (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600))) {
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
<html lang="en">
<head>
 
<title>NOC Bootstrap Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

    <?php
        include_once '../GUI/header.php';
    ?>


    <script>
        
        window.onload = function() {
            var message = "<?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>";
            if (message !== '') {
                alert(message);
            }
        };
    </script>

</head>
<body>

<div class="container">
    
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Account Management (Admin only)</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- User accounts data should be dynamically generated here -->
                            <tr>
                                <th scope="row">1</th>
                                <td>admin</td>
                                <td>admin@example.com</td>
                                <td>Admin</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    <button type="button" class="btn btn-success btn-sm">Add User</button>
                                </td>
                            </tr>
                            <!-- Add more rows for other user accounts as needed -->
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success" onclick="signup.php">Add New User</button>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

    <?php
        require_once '../GUI/footer.php';
    ?>

</body>
</html>
