<!DOCTYPE html>
<html>
<head>
  <title>Register now</title>
    <link rel="stylesheet" href="css/register.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top " id="nav">
          <a href="index.html" class="navbar-brand offset-md-1 offset-6" style="color: #43BCFA;">CLOTHES FACTORY</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse offset-md-4 offset-xl-4" id="menu">
            <ul class="navbar-nav " style="text-align: center;">
              <div class="col-3">
                <li class="nav-item">
                  <a href="index.php" class="nav-link active" style="color: white">HOME</a>
                </li>
              </div>
              <div class="col-4">
                <li class="nav-item">
                  <a href="#about" class="nav-link" style="color: white">ABOUT US</a>
                </li>
              </div>
              <div class="col-3">
                <li class="nav-item">
                  <a href="contact.html" class="nav-link" style="color: white">CONTACTS</a>
                </li>
              </div>
              <div class="col-8">
                <li class="nav-item special">
                  <a href="login.php"><button class="btn nav-btn">LOGIN</button></a>
                </li>
              </div>
            </ul>
          </div>
        </nav>
<!--Rgistration -->
<div class="register">
    <center>
<fieldset class="f1">
<div class="reg"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"><br><br>
  <h4 style="color:#10A9F7;">First Name : </h4><input type="text" name="Fname" required>
  <h4 style="color:#10A9F7;">Last Name : </h4><input type="text" name="Flast" required>
  <h4 style="color:#10A9F7;">Email Address : </h4><input type="text" name="Email" required>
  <h4 style="color:#10A9F7;">Phone Number : </h4><input type="text" name="Phone" required>
  <h4 style="color:#10A9F7;">Gender : </h4><input type="text" name="Gender" required>
  <h4 style="color:#10A9F7;">Address : </h4><input type="text" name="Address" required>
  <h4 style="color:#10A9F7;">Username : </h4><input class="ut" type="text" name="logUS" required>
  <h4 style="color:#10A9F7;">Password : </h4><input class="pt" type="Password" name="logPS" required>
  <br><br><button class="sb" type="submit" name="submit" >Submit</button>
</form></div></div></fieldset></center>

<?php 
include_once "db/DatabaseConnect.php";
include_once "classes/customer.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $Customer = new customer();
  
  $Customer->Fname=$_REQUEST['Fname'];
  $Customer->Lname=$_REQUEST['Flast'];
  $Customer->phonenumber=$_REQUEST['Phone'];
  $Customer->gender=$_REQUEST['Gender'];
  $Customer->address=$_REQUEST['Address'];
  $Customer->Email=$_REQUEST['Email'];
  $person = new person();
  $person->username=$_REQUEST['logUS'];
  $person->password=$_REQUEST['logPS'];
  $Customer->signup($Customer->Fname,$Customer->Lname,$Customer->gender,$Customer->address,$Customer->phonenumber,$Customer->Email, $person->username,$person->password);

}?> 




</body>
</html>



  







