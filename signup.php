
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>



</head>

<body>
    <section>
        <?php
            require_once '../GUI/header.php';
        ?>
    </section>

    <section>
    <br><br>
    <div class="signup-box border row align-items-center position-absolute top-100 start-50 translate-middle row align-items-center">
        <form method="POST" action="registration_req.php" class=" row g-3 card-body col-md-5 mb-7" style=" align-content:center; padding-top:40px; padding-bottom:40px; padding-left:50px; padding-right:40px;">
        
        <h2>Sign Up</h2>
            <div class="col-md-5">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="Shane" id="firstName" name="firstName">
            </div>
            <div class="col-md-7">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="De Silva" name="lastName" id="lastName">
            </div>
            <div class="col-9">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position">
            </div>
            <div class="col-md-3">
                <label for="gender" class="form-label">Gender</label>
                  <br>        
                <input type="radio" id="male" name="Gender" value="male" class="form-check-input" required>
                <label for="male">Male</label> <br>
                <input type="radio" id="female" name="Gender" value="female" class="form-check-input">
                <label for="female">Female</label>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label">Telephone Number</label>
                <input type="text" class="form-control" id="telephone" name="telephone">
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="col-md-8">
                <label for="institute" class="form-label">Institute Name</label>
                <select id="institute" class="form-select" name="institute">
                    <option value="" selected>Choose...</option>
                    <option>University of Peradeniya</option>
                    <option>University of Moratuwa</option>
                    <option>University of Jaffna</option>
                    <option>University of Jayawardanapura</option>
                    <option>Easten University</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="instituteCode" class="form-label">Institute Code</label>
                <input type="text" class="form-control" id="instituteCode" name="instituteCode">
            </div>
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <!-- <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <div class="col-12">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role">
            </div>
            </div> -->


            <div class="col-12" style="align-items:center">
                <button type="submit" name="register_me" class="btn btn-primary">Register</button>
                <a href="../GUI/index.php">
                    <button type="button"  class="btn btn-primary" >Cancel</button>
                </a>
            </div>  

        </form>
    </div>    
    </section>
<br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>