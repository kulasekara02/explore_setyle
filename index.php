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
	      <div class="collapse navbar-collapse" id="defaultNavbar1"><a href="index.php">
	      	<img src="images/logo.png" class="img-responsive" alt="Placeholder image"></a>
            <ul class="nav navbar-nav navbar-right">
         
          <li><a href="allproducts.php">All Products </a></li>
	    <li><a href="login.php">Login</a></li>
		 <li><a href="REgister.php">Register</a></li>
			<li><a href="pdetails.php"> products  details </a></li>	
          <li><a href="userLogout.php">Log Out</a></li>
			
            </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
		
		 <form method="post" align="right" action="Search.php" id="searchform">
<input type="text" name="name">
<input type="submit" name="submit" value="Search">
</form>
		
		
	  <div id="carousel1" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel1" data-slide-to="1"></li>
	      <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item active"><img src="images/slid/adult.jpg" alt="First slide image" class="center-block image-fill">
	        <div class="carousel-caption">
	          <h3>Special Offer sampath credit card</h3>
	          <p>10% OFF/=</p>
            </div>
          </div>
	      <div class="item"><img src="images/slid/smiling.jpg" alt="Second slide image" class="center-block image-fill">
	        <div class="carousel-caption">
	          <h3>Special Offer peoples debit card</h3>
	          <p>5% OFF/=</p>
            </div>
          </div>
	      <div class="item"><img src="images/slid/woman.jpg" alt="Third slide image" class="center-block image-fill">
	        <div class="carousel-caption">
	          <h3>Special Offer commercial credit card</h3>
	          <p>10% OFF/=</p> 
            </div>
          </div>
        </div>
	    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
	  <h1> Main Categorys </h1>

	  <div class="row">
	    <div class="col-md-4">
	      <div class="thumbnail"><a href=""><img src="images/ladies items/shallow-focus-photo-of-two-women-smiling-near-plants-2646841.jpg" alt="Thumbnail Image 1" class="image-fill"></a>
	        <div class="caption">
	          <h3>Ladies</h3>
	          <p>ALL THE LADIES ITEMS</p>
</div>
          </div>
        </div>
	    <div class="col-md-4">
	      <div class="thumbnail"><a href=""><img src="images/Gents items/tousers/business-businessmen-career-colorful-6805.jpg" alt="Thumbnail Image 1" class="image-fill"></a>
	        <div class="caption">
	        <h3>Gents</h3>
	        <p>ALL THE GENTS ITEMS</p>
</div>
          </div>
        </div>
	    <div class="col-md-4">
	      <div class="thumbnail"><a href="Bracelets.html"><img src="images/kids/2-girl-walking-on-brown-bridge-during-daytime-50581.jpg" alt="Thumbnail Image 1" class="image-fill"></a>
	        <div class="caption">
	          <h3>kids</h3>
	          <p>ALL THE kids ITEMS</p>
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
	<script src="js/bootstrap.js"></script>
  </body>
</html>