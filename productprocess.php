<?php
session_start();
$mysqli = new mysqli('localhost','root','','explore_setyle') or die(mysqli_error($mysqli));

$id = 0;
$update = false;

$product_name = '';
$category='';
$sub_category='';
$price='';


if (isset($_POST['add'])){
	$product_name = $_POST['product_name'];
	$category = $_POST['category'];
	//$user_name = $_POST['user_name'];
	$sub_category = $_POST['sub_category'];
	$price = $_POST['price'];
	
	
$mysqli->query("INSERT INTO products (product_name,category,sub_category,price) VALUES('$product_name', '$category', '$sub_category', '$price')") or die($mysqli->error);

	    $_SESSION['massage'] = "Record has been saved(=";
        $_SESSION['mas_type'] = "success";
        header("location:addproducts.php");
}
	if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM products WHERE id=$id") or die ($mysqli->error());
  
     $_SESSION['massage'] = "Record has been deleted!!!!!!!";
     $_SESSION['mas_type'] = "denger";
      header("location:addproducts.php");


	}
	
	if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
    $result = $mysqli->query("SELECT * FROM products WHERE id=$id") or die ($mysqli->error());
	if (count($result)==1){
	$row = $result->fetch_array();


	$product_name = $row['product_name'];
	$category = $row['category'];
	$sub_category = $row['sub_category'];
	$price = $row['price'];

	}
}

if (isset($_POST['update'])){
	$id =$_POST['id'];
	$product_name = $_POST['product_name'];
	$category = $_POST['category'];
	$sub_category = $_POST['sub_category'];
	$price = $_POST['price'];

   
   $mysqli->query("UPDATE products SET product_name='$product_name', category='$category', sub_category='$sub_category', price='$price' WHERE id=$id") or die ($mysqli->error);

   $_SESSION['massage'] = "Details has been update";
   $_SESSION['msg_type'] ="warning";

   header('location:addproducts.php') ;                   
}