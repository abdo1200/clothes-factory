<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link href="aos.scss" rel="stylesheet/scss" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="aos/aos.css" />
    <link rel="stylesheet" href="css/admin.css">
    <script src="aos/aos.js"></script>
    <script src="js/main.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top " id="nav">
          <a href="admin_hp.php" class="navbar-brand offset-md-1 offset-6" style="color: #43BCFA;">CLOTHES FACTORY</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse offset-md-4 offset-xl-4" id="menu">
            <ul class="navbar-nav " style="text-align: center;">
              <div class="col-3">
                <li class="nav-item">
                  <a href="admin_hp.php" class="nav-link active" style="color: white">HOME</a>
                </li>
              </div>
              <div class="col-4">
                <li class="nav-item">
                  <a href="#about" class="nav-link" style="color: white">ABOUT US</a>
                </li>
              </div>
              <div class="col-3">
                <li class="nav-item">
                  <a href="contact.html" class="nav-link" style="color: white">SERVICE</a>
                </li>
              </div>
              <div class="col-8">
                <li class="nav-item special">
                  <a href="login.php"><button class="btn nav-btn" style="background-color: #10AEF9;color: white;">LOG OUT</button></a>
                </li>
              </div>
            </ul>
          </div>
        </nav>


<?php 
include_once "db/DatabaseConnect.php";
include_once "classes/admin.php";
$admin= new admin();
$admin->view_customers();
?>

</body>
</html>