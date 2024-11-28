<!--CONTACT_LIST-->

<!DOCTYPE html>
<html lang="en">
<head>
 
<title>NOC Bootstrap Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body>

    <?php
        include 'header.php';
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
    <div class="row mt-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact List</h5>
                    <div style="overflow-x: auto;">
                        <table class="table table-responsive table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Contact No</th>
                                <th scope="col">Institute</th>
                                <th scope="col">InstCode</th>
                                <th scope="col">UName</th>
                                <th scope="col">InstEmail</th>
                                <th scope="col">PersonalEmail</th>
                                <th scope="col">NocEmail</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>	
                        <tbody>
                                <?php
                                
                                include('connect.php');

                                
                                $query = "SELECT * FROM contactlist";
                                $result = $conn->query($query);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                                <th scope='row'>" . $row['contactId'] . "</th>
                                                <td>" . $row['Institute'] . "</td>
                                                <td>" . $row['InstCode'] . "</td>
                                                <td>" . $row['UName'] . "</td>
                                                <td>" . $row['InstEmail'] . "</td>
                                                <td>" . $row['PersonalEmail'] . "</td>
                                                <td>" . $row['NocEmail'] . "</td>
                                                <td>" . $row['Mobile'] . "</td>
                                                <td>" . $row['Telephone'] . "</td>
                                                <td>" . $row['Designation'] . "</td>
                                                <td>
                                                    <a href='edit_contact.php?id=" . $row['contactId'] . "' class='btn btn-primary btn-sm'>Edit</a>
                                                    
                                                    <a href='delete_contact.php?id=" . $row['contactId'] . "' class='btn btn-danger btn-sm'>Delete</a>
                                                </td>
                                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No pending requests found.</td></tr>";
                                }

                                $conn->close();
                                ?>
                            </tbody>
                    </table>
                    
                    <button type="button" class="btn btn-success" onclick="window.location.href='add_new_contact.php'">Add New Contact</button>

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

