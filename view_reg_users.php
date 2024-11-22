<?php

include 'connect.php';


$sql = "SELECT firstName, lastName, email, mobile, telephone, position, institute, instituteCode, username, password, role FROM registration";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Users</title>
</head>

<body>
    <?php
        include_once '../GUI/header.php';
    ?>

<div class="container mt-5">
    <h2 class="mb-4" style="color: black;">Registeration Requests</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Telephone</th>
                <th>Position</th>
                <th>Institute</th>
                <th>InstituteCode</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        
                        <td><?php echo htmlspecialchars($row['firstName']); ?></td>
                        <td><?php echo htmlspecialchars($row['lastName']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['mobile']); ?></td>
                        <td><?php echo htmlspecialchars($row['telephone']); ?></td>
                        <td><?php echo htmlspecialchars($row['position']); ?></td>
                        <td><?php echo htmlspecialchars($row['institute']); ?></td>
                        <td><?php echo htmlspecialchars($row['instituteCode']); ?></td>
                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                        <td><?php echo htmlspecialchars($row['password']); ?></td>
                        <td><?php echo htmlspecialchars($row['role']); ?></td>
                        <td>
                        <a href="edit_user.php?id=<?php echo $row['username']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="approve_request.php?id=<?php echo $row['username']; ?>" class="btn btn-success btn-sm">Approve</a>
                        <a href="delete_request.php?id=<?php echo $row['username']; ?>" class="btn btn-danger btn-sm">Delete</a>

                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No registered users found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
