
<?php
//login.php
// Include the database connection file
include 'connect.php';

// Start session
session_start();

// Check if the form is submitted
if (isset($_POST['login'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = trim($_POST['password']);

    // Prepare the SQL query to retrieve the user
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['uid'] = $user['uid'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect to the dashboard or another page
            header("Location: view_reg_users.php");
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
 
<title>Login Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Favicons -->
<link href="../Photos/LNOC.jpg" rel="icon">
<link href="../Photos/Logo.png" rel="apple-touch-icon">
  
<!-- Template Main CSS File -->
<link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="css/boxicons.min.css" rel="stylesheet">
 
<nav class="navbar" style="background-color: #2a3838; width:100%">
  <div class="row">
    <div class="col-md-2" style="padding-left:50px;">
      <img src="../Photos/Logo.png" alt="logo" width="200px" height="90px" class="d-inline-block">
    </div>
    <div class="col">
      <h1 style="padding-top:4px; padding-left: 80px; color: #fff; font-size:50px;">Network Operation Center</h1>  
    </div> 
  </div>
</nav>

</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="javascript.js"></script>
  <script src="bootstrp.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <?php
    // Display error message if set
    if(isset($error_message)) {
        echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
    }
    ?>


   

<br><br>
<div class="row align-items-center position-absolute top-50 start-50 translate-middle row align-items-center">

    <form method="POST" action="login.php" class="card-body card col-md-5 mb-7"  style=" align-content:center; padding-top:10px; padding-bottom:40px; padding-left:40px; padding-right:40px;">

        <h1 class="mt-4 mb-4">Login</h1>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <br>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>

        <br>

        <div class="col-12" >
              <button type="submit" class="btn btn-primary" name="login">Login</button>
              <a href="../GUI/index.php">
                  <button type="button"  class="btn btn-primary" >Cancel</button>
              </a>
        </div>
        <br>
        <span class="signup"><b>No account? <a href="../GUI/signup.php">signup</a></b></span>
       <br>
    </form>
    </div>    
<br><br>


</body>

</html>