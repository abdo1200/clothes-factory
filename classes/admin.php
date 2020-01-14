<?php
/**
 *  
 */
include_once ('./db/DatabaseConnect.php');
include_once "person.php";

class admin extends person
{
	function view_customers(){
    	$sql = "SELECT * FROM customer";
		$result = $this->connect()->query($sql);
		$count=mysqli_num_rows($result);
		echo "<table border='1' style='border:#10A9F7;margin-top:150px;margin-left:150px;border-radius: 10px;'>
		<tr>
		<th style='background-color:#10A9F7;text-align:center;color:white;'>First Name</th>
		<th style='background-color:#10A9F7;text-align:center;color:white;'>Lastname</th>
		<th style='background-color:#10A9F7;text-align:center;color:white;'>Situation</th>
		<th style='background-color:#10A9F7;text-align:center;color:white;'>Gender</th>
		<th style='background-color:#10A9F7;text-align:center;color:white;'>Address</th>
		<th style='background-color:#10A9F7;text-align:center;color:white;'>PhoneNumber</th>
		<th style='background-color:#10A9F7;text-align:center;color:white;'>Email</th>
		</tr>";
	while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td style='text-align:center;width:150px;'>" . $row['Fname'] . "</td>";
		echo "<td style='text-align:center;width:150px;'>" . $row['Lname'] . "</td>";
		echo "<td style='text-align:center;width:150px;'>" . $row['situation'] . "</td>";
		echo "<td style='text-align:center;width:150px;'>" . $row['gender'] . "</td>";
		echo "<td style='text-align:center;width:150px;'>" . $row['address'] . "</td>";
		echo "<td style='text-align:center;width:150px;'>" . $row['phonenumber'] . "</td>";
		echo "<td style='text-align:center;width:150px;'>" . $row['Email'] . "</td>";
		echo "</tr>";
		}
	echo "</table>";
   }

   function view_orders(){
	$sql = "SELECT * FROM orders";
	$result = $this->connect()->query($sql);
	$count=mysqli_num_rows($result);
	echo "<table border='1' style='border:#10A9F7;margin-top:150px;margin-left:10px;border-radius: 10px;'>
	<tr>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>ID</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Product Name</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Price</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Name</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Address</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Phone</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Status</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Discount</th>
	<th style='background-color:#10A9F7;text-align:center;color:white;'>Delieverd</th>
	</tr>";
while($row = mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td style='text-align:center;width:150px;'>" . $row['id'] . "</td>";
	echo "<td style='text-align:center;width:150px;'>" . $row['product'] . "</td>";
	echo "<td style='text-align:center;width:150px;'>" . $row['price'] . "</td>";
	echo "<td style='text-align:center;width:150px;'>" . $row['name'] . "</td>";
	echo "<td style='text-align:center;width:150px;'>" . $row['Address'] . "</td>";
	echo "<td style='text-align:center;width:150px;'>" . $row['phone'] . "</td>";
	echo "<td style='text-align:center;width:150px;'>" . $row['status'] . "</td>";
	echo "<td style='text-align:center;width:150px;'>" . $row['discount'] . "</td>";
	if($row['status']=='delivered')
	{
		echo "<td style='text-align:center;width:150px;color:#10A9F7;'> Delivered </td>";
	}else
	{
		echo "<td style='text-align:center;width:150px;'><form action='delivered.php?id=" . $row['id'] . "' method='post'>
		<button name='btn' value=''>Delivered</button>
		</form></td>";
	}
	
	echo "</tr>";
	}
echo "</table>";
}
function delivered($id)
	{
		$sql = "UPDATE orders set status='delivered' WHERE id='$id'";
		$result = $this->connect()->query($sql);
		header("location:view_order.php?id=$id");

	}
}



?>