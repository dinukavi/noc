<!DOCTYPE html>
<html lang="en">
<head>
 
<title>NOC Bootstrap Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicons -->
<link href="../Photos/LNOC.jpg" rel="icon">
<link href="../Photos/Logo.png" rel="apple-touch-icon">
  
<!-- Template Main CSS File -->
<link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="css/boxicons.min.css" rel="stylesheet">
 
</head>

<body>

  <?php
    require '../GUI/header.php';
  ?>

<div class="container" style="color: black;">
  <h1 class="mt-4 mb-4">LEARN Network Operation Centre Dashboard</h1>

    <div class="row">
      <!-- Bandwidth Graph -->
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body" style="padding-bottom:50px;">
            <h5 class="card-title">Bandwidth Graph</h5>
            <br>
            <img src="../Photos/g1.png" alt="dialogb1" width=100%>
          </div>
        </div>
      </div>

      <!-- Latency Graph -->
      <div class="col">
        <div class="card">
          <div class="card-body" style="padding-bottom:62px;">
            <h5 class="card-title">Latency (Smokeping) Graph</h5>
            <br>
            <img src="../Photos/smokeping.png" alt="dialogb1" width=100%>
          </div>
        </div>
      </div>
    </div>
<br>
    <div class="row">
      <!-- Link Uptime -->
      <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Link Uptime</h5>
            <br>
          <div class="row">
            <div class="col-md-3 mb-3" style="padding-left: 50px;">
              <p class="card-text">Daily</p>
              <p class="card-text">Weekly</p>
              <p class="card-text">Monthly</p>
              <p class="card-text">Yearly</p>
            </div>
            <div class="col">
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
            </div>
          </div>
          </div>  
      </div>
    </div>

    <!-- Destinations-->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Destinations</h5>
            <br>
          <div class="row">
            <div class="col-md-3 mb-3" style="padding-left: 50px;">
              <p class="card-text">Google</p>
              <p class="card-text">Microsoft</p>
              <p class="card-text">Researchgat</p>
              <p class="card-text">Zoom</p>
            </div>
            <div class="col">
              <p class="card-text">: 99ms</p>
              <p class="card-text">: 99ms</p>
              <p class="card-text">: 99ms</p>
              <p class="card-text">: 99ms</p>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <div class="row">
      <!-- Link Uptime -->
      <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Link Downtime</h5>
            <br>
          <div class="row">
            <div class="col-md-3 mb-3" style="padding-left: 50px;">
              <p class="card-text">Daily</p>
              <p class="card-text">Weekly</p>
              <p class="card-text">Monthly</p>
              <p class="card-text">Yearly</p>
            </div>
            <div class="col">
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
            </div>
          </div>
          </div>  
      </div>
    </div>

    <!-- Destinations-->
    <div class="col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cumulative Period of Downtime</h5>
            <br>
          <div class="row">
          <div class="col-md-3 mb-3" style="padding-left: 50px;">
              <p class="card-text">Daily</p>
              <p class="card-text">Weekly</p>
              <p class="card-text">Monthly</p>
              <p class="card-text">Yearly</p>
            </div>
            <div class="col">
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
              <p class="card-text">: 99%</p>
            </div>
          </div>
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
