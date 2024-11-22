<?php
session_start();
include('connect.php');

// Uncomment to restrict access to specific roles, e.g., Super Admin
/*
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Super Admin') {
    echo "Unauthorized access";
    exit;
}
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch data from form inputs
    //$Nno = $_POST['Nno'];
    $InstCode = $_POST['InstCode'];
    $BackupLinkInt = $_POST['BackupLinkInt'];
    $WANIP = $_POST['WANIP'];
    $LANNET = $_POST['LANNET'];
    $Ipv6_WAN_IP = $_POST['Ipv6_WAN_IP'];
    $Ipv6_LAN_NET = $_POST['Ipv6_LAN_NET'];
    $Ipv6_LAN_IP = $_POST['Ipv6_LAN_IP'];
    $CircuitID = $_POST['CircuitID'];
    $Bandwidth = $_POST['Bandwidth'];
    $Model = $_POST['Model'];
    $SN = $_POST['SN'];
    $RtrReturned = $_POST['RtrReturned'];
    $Name = $_POST['Name'];
    $CourierAddress = $_POST['CourierAddress'];
    $Access = $_POST['Access'];
    $Remarks = $_POST['Remarks'];

    // Insert query to add a new record
    $insert_query = "INSERT INTO networkdetails ( InstCode, BackupLinkInt, WANIP, LANNET, Ipv6_WAN_IP, Ipv6_LAN_NET, Ipv6_LAN_IP, CircuitID, Bandwidth, Model, SN, RtrReturned, Name, CourierAddress, Access, Remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("ssssssssssssssss",  $InstCode, $BackupLinkInt, $WANIP, $LANNET, $Ipv6_WAN_IP, $Ipv6_LAN_NET, $Ipv6_LAN_IP, $CircuitID, $Bandwidth, $Model, $SN, $RtrReturned, $Name, $CourierAddress, $Access, $Remarks);

    if ($stmt->execute()) {
        header("Location: network_details.php?message=New network added successfully");
        exit;
    } else {
        echo "Error adding record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New Network</title>
</head>
<body>

    <?php
        include_once 'header.php';
    ?>

    <div class="signup-box border row align-items-center position-absolute top-100 start-50 translate-middle row align-items-center">
        <h2>Add New Network</h2>    
    <form method="POST" action="" class=" row g-3 card-body col-md-5 mb-7" style=" align-content:center; padding-top:40px; padding-bottom:40px; padding-left:50px; padding-right:40px;">
        

        <label>InstCode:</label>
        <input type="text" name="InstCode" id="InstCode" required><br>

        <label>BackupLinkInt:</label>
        <input type="text" name="BackupLinkInt" id="BackupLinkInt" required><br>

        <label>WANIP:</label>
        <input type="text" name="WANIP" id="WANIP" required><br>

        <label>LANNET:</label>
        <input type="text" name="LANNET" id="LANNET" required><br>

        <label>Ipv6_WAN_IP:</label>
        <input type="text" name="Ipv6_WAN_IP" id="Ipv6_WAN_IP" required><br>

        <label>Ipv6_LAN_NET:</label>
        <input type="text" name="Ipv6_LAN_NET" id="Ipv6_LAN_NET" required><br>

        <label>Ipv6_LAN_IP:</label>
        <input type="text" name="Ipv6_LAN_IP" id="Ipv6_LAN_IP" required><br>

        <label>CircuitID:</label>
        <input type="text" name="CircuitID" id="CircuitID" required><br>

        <label>Bandwidth:</label>
        <input type="text" name="Bandwidth" id="Bandwidth" required><br>

        <label>Model:</label>
        <input type="text" name="Model" id="Model" required><br>

        <label>SN:</label>
        <input type="text" name="SN" id="SN" required><br>

        <label>RtrReturned:</label>
        <input type="text" name="RtrReturned" id="RtrReturned" required><br>

        <label>Name:</label>
        <input type="text" name="Name" id="Name" required><br>

        <label>CourierAddress:</label>
        <input type="text" name="CourierAddress" id="CourierAddress" required><br>

        <label>Access:</label>
        <input type="text" name="Access" id="Access" required><br>

        <label>Remarks:</label>
        <input type="text" name="Remarks" id="Remarks"><br>

        <button type="submit" class="btn btn-success">Add New Network</button>
    </form>
</body>
</html>
