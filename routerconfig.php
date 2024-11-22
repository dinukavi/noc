<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEARN Network Operation Centre Dashboard</title>
    
    
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

        .action-btn {
            margin-right: 10px;
        }
    </style>
</head>
<body>

  <?php
    require_once '../GUI/header.php';
  ?>



<div class="container">

    <!-- View/Edit Router Configurations Section -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View/Edit Router Configurations</h5>
                    <div class="btn-group" role="group" aria-label="Router Actions">
                        <button type="button" class="btn btn-primary action-btn">View ACLs</button>
                        <button type="button" class="btn btn-primary action-btn">View Interfaces</button>
                        <button type="button" class="btn btn-primary action-btn">View Hardware Details</button>
                        <button type="button" class="btn btn-primary action-btn">Execute Ping</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
