<?php

include 'connect.php';


$sql = "SELECT firstName, lastName, email, mobile, telephone, position, institute, instituteCode, username, password, role FROM registration";
$result = $conn->query($sql);
?> 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-qesRbzF0iURwlG+Yo5I4w8toJCZCHZjGlTY3E9ZmSfekT2zks/pHC8WjAL3/l3w7" crossorigin="anonymous">
</head>
<body>
    <?php include_once '../GUI/header.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Registration Requests</h2>
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
                    <th>Institute Code</th>
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
                        <td colspan="12" class="text-center">No registration requests found.</td>
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
