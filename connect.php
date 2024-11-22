<?php
/*
    $server_name="192.248.4.231";
    $user_name="noc";
    $password="n0cdbuser&";
    $database="learn";
*/

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "noc";

    $conn = new mysqli($server_name, $user_name, $password, $database);

    if ($conn->connect_error) {
        die("Database Connection Failed: " . $conn->connect_error);
    }
    else{
        echo " <br>";
    }

    ?>



<!-- Favicons -->
<link href="../Photos/LNOC.jpg" rel="icon">
<link href="../Photos/Logo.png" rel="apple-touch-icon">
   
<!-- Template Main CSS File -->
<link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="css/boxicons.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="javascript.js"></script>
<script src="bootstrp.js"></script>


