<?php

    session_start();
    include('connect.php');

    // Uncomment these lines to check for Super Admin access and ID in the URL
    /*
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Super Admin') {
        echo "Unauthorized access";
        exit;
    }

    if (!isset($_GET['id']) || empty($_GET['id'])) {
        echo "No network ID specified.";
        exit;
    }
    */

    $network_id = $_GET['id'];

    // Fetch network details
    $query = "SELECT * FROM networkdetails WHERE Nno = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $network_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "Network not found.";
        exit;
    }

    $network = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Fetch updated data from form
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
        
        // Update the specific row based on Nno (network ID)
        $update_query = "UPDATE networkdetails SET InstCode = ?, BackupLinkInt = ?, WANIP = ?, LANNET = ?, Ipv6_WAN_IP = ?, Ipv6_LAN_NET = ?, Ipv6_LAN_IP = ?, CircuitID = ?, Bandwidth = ?, Model = ?, SN = ?, RtrReturned = ?, Name = ?, CourierAddress = ?, Access = ?, Remarks = ? WHERE Nno = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ssssssssssssssssi", $InstCode, $BackupLinkInt, $WANIP, $LANNET, $Ipv6_WAN_IP, $Ipv6_LAN_NET, $Ipv6_LAN_IP, $CircuitID, $Bandwidth, $Model, $SN, $RtrReturned, $Name, $CourierAddress, $Access, $Remarks, $network_id);

        if ($stmt->execute()) {
            header("Location: network_details.php?message=Network updated successfully");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Network</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>

    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="javascript.js"></script>
  <script src="bootstrp.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <section>
        <div class="signup-box border row align-items-center position-absolute top-100 start-50 translate-middle row align-items-center">
        <form method="POST" class="form-control" action="" class=" row g-3 card-body col-md-5 mb-7" style=" align-content:center; padding-top:40px; padding-bottom:40px; padding-left:50px; padding-right:40px;">
        
        <h2>Edit Network Details</h2>

        <div class="col-12">
            <label>Network No:</label>
            <input type="text" class="form-control" name="Nno" value="<?php echo htmlspecialchars($network['Nno']); ?>" readonly><br>
        </div>

        <div class="col-12">
        <label>InstCode:</label>
        <input type="text" class="form-control" name="InstCode" value="<?php echo htmlspecialchars($network['InstCode']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>BackupLinkInt:</label>
        <input type="text" class="form-control" name="BackupLinkInt" value="<?php echo htmlspecialchars($network['BackupLinkInt']); ?>" required><br>
        </div>
        
        <div class="col-12">
        <label>WANIP:</label>
        <input type="text" class="form-control" name="WANIP" value="<?php echo htmlspecialchars($network['WANIP']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>LANNET:</label>
        <input type="text" class="form-control" name="LANNET" value="<?php echo htmlspecialchars($network['LANNET']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Ipv6_WAN_IP:</label>
        <input type="text" class="form-control" name="Ipv6_WAN_IP" value="<?php echo htmlspecialchars($network['Ipv6_WAN_IP']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Ipv6_LAN_NET:</label>
        <input type="text" class="form-control" name="Ipv6_LAN_NET" value="<?php echo htmlspecialchars($network['Ipv6_LAN_NET']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Ipv6_LAN_IP:</label>
        <input type="text" class="form-control" name="Ipv6_LAN_IP" value="<?php echo htmlspecialchars($network['Ipv6_LAN_IP']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>CircuitID:</label>
        <input type="text" class="form-control" name="CircuitID" value="<?php echo htmlspecialchars($network['CircuitID']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Bandwidth:</label>
        <input type="text" class="form-control" name="Bandwidth" value="<?php echo htmlspecialchars($network['Bandwidth']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Model:</label>
        <input type="text" class="form-control" name="Model" value="<?php echo htmlspecialchars($network['Model']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>SN:</label>
        <input type="text" class="form-control" name="SN" value="<?php echo htmlspecialchars($network['SN']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>RtrReturned:</label>
        <input type="text" class="form-control" name="RtrReturned" value="<?php echo htmlspecialchars($network['RtrReturned']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Name:</label>
        <input type="text" class="form-control" name="Name" value="<?php echo htmlspecialchars($network['Name']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>CourierAddress:</label>
        <input type="text" class="form-control" name="CourierAddress" value="<?php echo htmlspecialchars($network['CourierAddress']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Access:</label>
        <input type="text" class="form-control" name="Access" value="<?php echo htmlspecialchars($network['Access']); ?>" required><br>
        </div>

        <div class="col-12">
        <label>Remarks:</label>
        <input type="text" class="form-control" name="Remarks" value="<?php echo htmlspecialchars($network['Remarks']); ?>" required><br>
        </div>

        <div class="col-md-12">
                <button type="submit" name="updateNetwork" class="btn btn-success" value="Update Network">Update Network</button>
                <a href="netwok_details.php" class="btn btn-secondary">Cancel</a>
            </div>
    </form>
    </div>
    </section>


</body>
</html>
