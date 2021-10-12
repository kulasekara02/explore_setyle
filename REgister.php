<!DOCTYPE html>
<html lang="en">
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
          <li><a href="REgister.php">AboutUs</a></li>
          <li><a href="ContactUs.html">ContactUs</a></li>
          <li><a href="collections.html">Collection</a></li>
          <li><a href="Offers.html">Offers</a></li>
            </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
	
	  
        <main class="my-form">              
    <div class="cotainer">

   <?php require_once 'insertdata.php'; ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form"  action="insertdata.php" method="POST">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email_address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right"> User Name </label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="user_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone_number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="Password" class="form-control" name="Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nic_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card"> NIC  </abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nid_number" class="form-control" name="nic_number">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" value="submit" name="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>
    
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