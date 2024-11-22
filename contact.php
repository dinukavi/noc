<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact LEARN Network Operation Centre</title>

</head>

<body>

  <?php
    require '../GUI/header.php';
  ?>


<div class="container">
    <h1 class="mt-4 mb-4" style="color:black">Contact LEARN Network Operation Centre</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Contact Form</h5>
            <form action="submit_contact_form.php" method="POST">
                <div class="form-group">
                    <label for="nameInput">Your Name</label>
                    <input type="text" class="form-control" id="nameInput" name="name" required>
                </div>
                <div class="form-group">
                    <label for="emailInput">Your Email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" required>
                </div>
                <div class="form-group">
                    <label for="messageTextarea">Message</label>
                    <textarea class="form-control" id="messageTextarea" rows="5" name="message" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Contact Information</h5>
            <p class="card-text">If you prefer to contact us directly, you can reach out using the following contact details:</p>
            <ul  style="color:black">
                <li>Email: learn@ac.lk</li>
                <li>Phone: +94 81 200 3035</li>
                <li>Address: Information Technology Center, University of Peradeniya, Peradeniya 20400, Sri Lanka</li>
            </ul>
        </div>
    </div>
</div>

<br><br>

<?php
    require_once '../GUI/footer.php';
    ?>

</body>
</html>
