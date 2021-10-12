<?php
session_start();
$mysqli = new mysqli('localhost','root','','explore_setyle') or die(mysqli_error($mysqli));
  
 
$id = 0;
$update = false;

$full_name     = '';
$email_address='';
$user_name='';
$phone_number='';
$Password='';
$address='';
$nic_number='';

if (isset($_POST['submit'])){
	$full_name = $_POST['full_name'];
	$email_address = $_POST['email_address'];
	$user_name = $_POST['user_name'];
	$phone_number = $_POST['phone_number'];
	$Password = $_POST['Password'];
	$address = $_POST['address'];
	$nic_number = $_POST['nic_number'];



	$mysqli->query("INSERT INTO customer (full_name,email_address,user_name,phone_number,Password,address,nic_number) VALUES('$full_name', '$email_address', '$user_name', '$phone_number', '$Password','$address', '$nic_number')") or die($mysqli->error);

	    $_SESSION['massage'] = "Record has been saved(=";
        $_SESSION['mas_type'] = "success";
        header("location:adminedit.php");

}
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM customer WHERE id=$id") or die ($mysqli->error());
  
     $_SESSION['massage'] = "Record has been deleted!!!!!!!";
     $_SESSION['mas_type'] = "denger";
      header("location:index.php");

}




if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
    $result = $mysqli->query("SELECT * FROM customer WHERE id=$id") or die ($mysqli->error());
	if (count($result)==1){
	$row = $result->fetch_array();


	$full_name = $row['full_name'];
	$email_address = $row['email_address'];
	$user_name = $row['user_name'];
	$phone_number = $row['phone_number'];
	$Password = $row['Password'];
	$address = $row['address'];
	$nic_number = $row['nic_number'];


	}
}

if (isset($_POST['update'])){
	$id =$_POST['id'];
	$full_name = $_POST['full_name'];
	$email_address = $_POST['email_address'];
	$user_name = $_POST['user_name'];
	$phone_number = $_POST['phone_number'];
	$Password = $_POST['Password'];
	$address = $_POST['address'];
	$nic_number = $_POST['nic_number'];
   
   $mysqli->query("UPDATE customer SET full_name='$full_name', email_address='$email_address', user_name='$user_name', phone_number='$phone_number', Password='$Password', address='$address', nic_number='$nic_number' WHERE id=$id") or die ($mysqli->error);

   $_SESSION['massage'] = "Details has been update";
   $_SESSION['msg_type'] ="warning";

   header('location:adminedit.php') ;                   
}


