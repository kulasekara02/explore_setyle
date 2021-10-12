<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<div class="container">
	  <nav class="navbar navbar-default">
	    <div class="container-fluid">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="defaultNavbar1"><a href="index.html">
	      	<img src="images/logo.png" class="img-responsive" alt="Placeholder image"></a>
            <ul class="nav navbar-nav navbar-right">
          <li><a href="REgister.php">Register</a></li>
          <li><a href="">ContactUs</a></li>
          <li><a href="collections.php">Collection</a></li>
          <li><a href="Offers.html">Offers</a></li>
            </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
<?php
if(isset($_POST['submit'])){
include('DBconnection.php');
if($_POST['name']){
$search=$_POST['name'];
$sql = 'SELECT * FROM products WHERE product_name = "'.$search.'"';
$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));
if(mysqli_num_rows($result) > 0){
//-create while loop and loop through result set
while($row=mysqli_fetch_array($result)){
$product_name=$row['product_name'];
$category=$row['category'];
$sub_category=$row['sub_category'];
$price=$row['price'];	
	
//-display the result of the array
echo "<ul>\n";
echo 'The product Name  is';
"<br/>";
echo "<li>" .$product_name."</li>\n";
"<br/>";
	
echo "</ul>";	
echo 'The Category is';
"<br/>";
echo "<li>" .$category."</li>\n";
"<br/>";
	
echo "</ul>";	
echo 'The Sub Category is';
"<br/>";
echo "<li>" .$sub_category."</li>\n";
"<br/>";
	
	echo "</ul>";	
echo 'The price is';
"<br/>";
echo "<li>" .$price."</li>\n";
"<br/>";
	
	echo "</ul>";	
echo 'The price is';
"<br/>";
echo "<li>" .$category."</li>\n";
"<br/>";
}//end while
}
else{
echo " No results found ";
}
}
}
else{
header("Location:index.html");
}
?>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>	
	  
	  <footer class="footer-distributed">

		<div class="footer-left">

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2015</p>

			</div>

			

		</footer>
    </div>
<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"> </script>
</div>
 </body>
</html>
