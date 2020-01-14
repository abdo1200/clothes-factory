<!DOCTYPE html>
<html> 
<head>
    <title>Log in</title>
    <link href="aos.scss" rel="stylesheet/scss" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <script src="js/all.js"></script>
    <link rel="stylesheet" href="aos/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="aos/aos.js"></script>
    <script src="js/main.js"></script>
    

</head>
<body>
<!-------------------------nav bar--------------------------->

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
              <div class="col-5">
                <li class="nav-item">
                  <a href="#about" class="nav-link" style="color: white">ABOUT US</a>
                </li>
              </div>
              <div class="col-3">
                <li class="nav-item">
                  <a href="contact.html" class="nav-link" style="color: white">SERVICE</a>
                </li>
              </div>
            </ul>
          </div>
        </nav>
<div class="login">
  <center>
    <fieldset class="f2">
    <legend>LOGIN FORM</legend>

    <div class="log" style="margin:50px;">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"   >
         <div class="txt">
          <h4 style="color:#10A9F7;" >User Name : </h4><input style="border-radius: 10px;" class="ut" type="text" name="logUS" required>
          <h4 style="color:#10A9F7;">Password : </h4><input style="border-radius: 10px;" class="pt" type="Password" name="logPS" required>
         </div>
         <?php
         include_once "db/DatabaseConnect.php";
         include_once "classes/person.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['login'])) {
         $person = new person();

         $person->username=$_REQUEST['logUS'];
         $person->password=$_REQUEST['logPS'];
         $person->login($person->username ,$person->password);
         

         ?><p style="color: red"><?php $person->login_error($person->username ,$person->password) ?></p><?php 
        } }?>
         <br><button style="border-radius: 10px;width:80px;background-color:#10A9F7;color:white;" class="lb" name="login">Login</button><br><br>
         <p>Not Registerd? <a href="register.php">Sign Up</a></p>
       </form>
    </div>
    </fieldset>
  </center>
</div>

    </body>
    </html>