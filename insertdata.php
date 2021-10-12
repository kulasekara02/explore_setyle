
<?php
	;
	


if (isset($_POST['submit'])) {
	include("DBconnection.php");

$full_name=$_POST['full_name'];
$email_address=$_POST['email_address'];
$user_name=$_POST['user_name'];
$phone_number=$_POST['phone_number'];
$Password=$_POST['Password'];
$address=$_POST['address'];
$nic_number=$_POST['nic_number'];

//echo $user_fname;
//echo $user_lname;
//echo $user_email;
//echo $user_address;
//echo $user_City;
//echo $user_ZipCode;
//echo $user_password;

	$sql = "INSERT INTO customer ". "(full_name, email_address, user_name, phone_number,Password,address,nic_number)"."VALUE('$full_name','$email_address','$user_name','$phone_number','$Password','$address','$nic_number')";
	
	$results = mysqli_query($conn, $sql);
	
	if(!$results) {
	  die('Could not enter data: '.mysqli_error($conn));
	}
	else
	{
    echo "Entered data successsfully\n";
	header("Location:index.php");
	}
   }
else
   {
	  //  echo 'submit the form first';
   }
?>
