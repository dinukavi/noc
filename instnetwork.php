<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact LEARN Network Operation Centre</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        
    <!-- Favicons -->
    <link href="../Photos/LNOC.jpg" rel="icon">
    <link href="../Photos/Logo.png" rel="apple-touch-icon">
    
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons.min.css" rel="stylesheet">

    
    <style>
        /* Custom styles */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card-text {
            color: #666;
        }

        .core-diagram img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="javascript.js"></script>
<script src="bootstrp.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <?php
    require_once '../GUI/header.php';
    ?>

<div class="container">
    <h1 class="mt-4 mb-4" style="color:black">Institutional Network</h1>

    <!-- Campus Network Information Section -->
    <div class="row mt-4">
        <!-- Subnet Information -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Subnet Information</h5>
                    <!-- Insert subnet information here -->
                    <p class="card-text">Subnet: 192.168.1.0/24</p>
                    <p class="card-text">Subnet Mask: 255.255.255.0</p>
                    <!-- Add more subnet information as needed -->
                </div>
            </div>
        </div>

        <!-- Core Network Diagram -->
        <div class="col-md-6">
            <div class="card core-diagram">
                <div class="card-body">
                    <h5 class="card-title">Core Network Diagram</h5>
                    <!-- Upload and display core network diagram here -->
                    <img src="core_network_diagram.jpg" alt="Core Network Diagram">
                    <!-- You can replace 'core_network_diagram.jpg' with the actual image file -->
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
