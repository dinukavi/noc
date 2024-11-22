<!DOCTYPE html>
<html lang="en">
<head>
    <title>NOC Bootstrap Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php
    include_once 'header.php';
?>

<script>
    window.onload = function() {
        var message = "<?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>";
        if (message !== '') {
            alert(message);
        }
    };
</script>

<div class="container">
    <div class="row mt-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Network Details</h5>
                    <div style="overflow-x: auto;">
                        <table class="table table-responsive table-bordered border-secondary">
                            <thead>
                                <tr>
                                    <th scope="col">Nno</th>
                                    <th scope="col">InstCode</th>
                                    <th scope="col">BackupLinkInt</th>
                                    <th scope="col">WANIP</th>
                                    <th scope="col">LANNET</th>
                                    <th scope="col">Ipv6_WAN_IP</th>
                                    <th scope="col">Ipv6_LAN_NET</th>
                                    <th scope="col">Ipv6_LAN_IP</th>
                                    <th scope="col">CircuitID</th>
                                    <th scope="col">Bandwidth</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">SN</th>
                                    <th scope="col">RtrReturned</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">CourierAddress</th>
                                    <th scope="col">Access</th>
                                    <th scope="col">Remarks</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>	
                            <tbody>
                                <?php
                                include('connect.php');
                                
                                $query = "SELECT * FROM networkdetails";
                                $result = $conn->query($query);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                                <th scope='row'>" . $row['Nno'] . "</th>
                                                <td>" . $row['InstCode'] . "</td>
                                                <td>" . $row['BackupLinkInt'] . "</td>
                                                <td>" . $row['WANIP'] . "</td>
                                                <td>" . $row['LANNET'] . "</td>
                                                <td>" . $row['Ipv6_WAN_IP'] . "</td>
                                                <td>" . $row['Ipv6_LAN_NET'] . "</td>
                                                <td>" . $row['Ipv6_LAN_IP'] . "</td>
                                                <td>" . $row['CircuitID'] . "</td>
                                                <td>" . $row['Bandwidth'] . "</td>
                                                <td>" . $row['Model'] . "</td>
                                                <td>" . $row['SN'] . "</td>
                                                <td>" . $row['RtrReturned'] . "</td>
                                                <td>" . $row['Name'] . "</td>
                                                <td>" . $row['CourierAddress'] . "</td>
                                                <td>" . $row['Access'] . "</td>
                                                <td>" . $row['Remarks'] . "</td>
                                                <td>
                                                    <a href='edit_network.php?id=" . $row['Nno'] . "' class='btn btn-primary btn-sm'>Edit</a>
                                                    <a href='delete_network.php?id=" . $row['Nno'] . "' class='btn btn-danger btn-sm'>Delete</a>
                                                </td>
                                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='18'>No network details found.</td></tr>";
                                }

                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-success" onclick="window.location.href='add_new_network.php'">Add New Network</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<?php
    require_once '../GUI/footer.php';
?>

</body>
</html>
