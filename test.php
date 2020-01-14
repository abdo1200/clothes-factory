<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/test.css">
</head>
<body>
<?php
        if (isset($_POST['btn'])) {
          $value=$_POST['btn'];
          echo $value;
        }
?>
 <form action="" method="post">
 <button action='' name="btn" value="hello">hello</button>
 </form>
</body>
</html>
