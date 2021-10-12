
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
         <?php
session_start();
$message="";

if(isset($_POST['submit'])){ 

if(count($_POST)>0) {
 include 'DBconnection.php';
 
 
$result = mysqli_query($conn,"SELECT * FROM customer WHERE user_name='" . $_POST["user_name"] . "' and Password = '". $_POST["user_password"]."'");
$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['full_name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:collections.php");
}

}

?>
  </head>
  <body>
  	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<div class="container">
	  <nav class="navbar navbar-default">
	    <div class="container-fluid">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="navbar navbar-expand-lg navbar-light bg-light" id="defaultNavbar1"><a href="index.html">
	      	<img src="images/logo.png" class="img-responsive" alt="Placeholder image"></a>
          <ul class="nav.navbar-nav.navbar-right li a">
          <li><a href="REgister.php">AboutUs</a></li>
          <li><a href="ContactUs.html">ContactUs</a></li>
          <li><a href="collections.html">Collection</a></li>
          <li><a href="#">log Out </a></li>
            </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
	    <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login here</div>
                        <div class="card-body">
							
<form name="my-form" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name" required>
 <br>
 Password:<br>
<input type="password" name="user_password" required>
<br><br>
<input type="submit" name="submit" value="submit" onclick=""> 
<input type="reset">
</form>
							<a href="adminlogin.php">admin(+</a>
							
							
							
						</div>
				</div>
			</div>
		</div>
	  </div>
		
		
		
		
		
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

