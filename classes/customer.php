<?php
include_once ('./db/DatabaseConnect.php');
include_once "person.php";
class customer extends person{
 	public $Fname;
 	public $Lname;
 	public $situation;
 	public $gender;
 	public $address;
 	public $phonenumber;
 	public $Email;

 	function signup($Fname,$Lname,$gender,$address,$phonenumber,$Email,$username,$password){
   		$sql = "INSERT INTO customer (Fname,Lname,situation,gender,address,phonenumber,Email, username)
		VALUES ('$Fname','$Lname','New','$gender','$address','$phonenumber','$Email' ,'$username')";
		$sql2 = "INSERT INTO person(username , password , position) VALUES('$username','$password','customer')";
		$conn = $this->connect()->query($sql);
		$conn2 = $this->connect()->query($sql2);
		if ($conn == TRUE) {		 
    		$message = "Registeration Done successfully!";
    		echo "<script type='text/javascript'>alert('$message');</script>";
		} 
		else {
   		    echo "Error: " . $sql . "<br>" . $conn;
			}

}
	function buy($username,$product,$price)
	{
		$sql = "SELECT * from customer WHERE username='$username'";
		$result = $this->connect()->query($sql);
		$row = mysqli_fetch_assoc($result);
		$situation=$row['situation'];
		$name=$row['Fname'];
		$address=$row['address'];
		$phone=$row['phonenumber'];
		if($situation=='New')
		{
			$sql2="INSERT INTO orders (product,price,name,Address,phone,status,discount) VALUES ('$product','$price','$name','$address','$phone','waiting','15%')";
			$conn2 = $this->connect()->query($sql2);
			$sql3="UPDATE customer SET situation ='old'";
			$conn3 = $this->connect()->query($sql3);
			$message = "Done! we will deleivred it soon you have discount 15% for your first buy";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else
		{
			$sql2="INSERT INTO orders (product,price,name,Address,phone,status,discount) VALUES ('$product','$price','$name','$address','$phone','waiting','NO DISCOUNT')";
			$conn2 = $this->connect()->query($sql2);
			$message = "Done! we will deleivred it soon ";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

	}
  
}



?>