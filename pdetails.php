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
	
	  <h1> products infromation</h1>
		
		
<?php require_once 'productprocess.php'; ?>
<?php
   if  (isset($_SESSION['massage'])): ?> 
<div class="alert alert-<?=$_SESSION['mas_type']?>"> 

<?php 
   echo $_SESSION['massage'];
   unset ($_SESSION['massage']);
    ?>
</div>
<?php endif?>

    <?php
$mysqli = new mysqli('localhost','root','','explore_setyle') or die(mysqli_error($mysqli));
$result  = $mysqli->query("SELECT * FROM products") or die ($mysqli->erorr);
		?> 
		 <div class="row justify-content-center">
 	<table class="table">
 		<thead>
 			<tr>
 				<th>Product Name</th>
 				<th>category</th>
 				<th>sub category</th>
 				<th>Price</th>			
 				            

 			</tr>
 		</thead>
<?php 
 		while ($row= $result->fetch_assoc()):  ?>
 			<tr>
 				<td> <?php echo $row['product_name']; ?> </td>
 				<td> <?php echo $row['category']; ?> </td>
 				<td> <?php echo $row['sub_category']; ?> </td>
 				<td> <?php echo $row['price']; ?> </td>
 	
 				
				</td>			
 			</tr>
 			<?php endwhile; ?>
 	 </table>
 	</div>
 	<?php
 	 function pre_r( $array ){
 	 	echo '<pre>';
 	 	print_r($array);
 	 	echo '</pre>';

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
