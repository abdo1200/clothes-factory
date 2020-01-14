<?php
include_once ('./db/DatabaseConnect.php');
class person extends db{
	public $username;
 	public $password;

 	function login($username,$password){
		$sql = "SELECT * FROM person WHERE username='$username' and password='$password'";
		$result = $this->connect()->query($sql);
		$count=mysqli_num_rows($result);

		if($count){
       		$row = mysqli_fetch_assoc($result);
		if ($row['position'] == 'admin') {
            header('location:admin_hp.php');   
            }    
        else{
            header("location:customer_hp.php?id=$username");
            }

   }
}

function login_error($username,$password){

	$sql = "SELECT * FROM person WHERE username='$username' and password='$password'";
	$result = $this->connect()->query($sql);
	$count=mysqli_num_rows($result);
	
		   $row = mysqli_fetch_assoc($result);
	if ($row['ps'] != '$password' && $row['un'] == '$username') {
					 echo "Invalid Password";    
				}else{
					 echo "Invalid Username or Password";
				}   
	
	}

}
?>