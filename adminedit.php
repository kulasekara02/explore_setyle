
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

  </head>
  <body>
  	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<div class="container">
	  <nav class="navbar navbar-default">
	    <div class="container-fluid">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="navbar navbar-expand-lg navbar-light bg-light" id="defaultNavbar1"><a href="">
	      	<img src="images/logo.png" class="img-responsive" alt="Placeholder image"></a>
          <ul class="nav.navbar-nav.navbar-right li a">
          <li><a href="adminedit.php"> CUSTOMER DETAILS </a></li>
          <li><a href="addproducts.php"> ADD PRODUCTS </a></li>
			 <li><a href="userLogout.php"> LOg Out</a></li>  
          
            </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
	<?php require_once 'process.php'; ?>
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
$result  = $mysqli->query("SELECT * FROM customer") or die ($mysqli->erorr);
//pre_r($rersult); ?>
 <div class="row justify-content-center">
 	<table class="table">
 		<thead>
 			<tr>
 				<th>Full Name</th>
 				<th>email_address</th>
 				<th>user name</th>
 				<th>phone number</th>			
 				<th>Password</th>
 				<th>nic number</th>
 				<th>adress</th>
               <th colspan="2">Action</th>

 			</tr>
 		</thead>
<?php 
 		while ($row= $result->fetch_assoc()):  ?>
 			<tr>
 				<td> <?php echo $row['full_name']; ?> </td>
 				<td> <?php echo $row['email_address']; ?> </td>
 				<td> <?php echo $row['user_name']; ?> </td>
 				<td> <?php echo $row['phone_number']; ?> </td>
 				<td> <?php echo $row['full_name']; ?> </td>
 				<td> <?php echo $row['Password']; ?> </td>
 				<td> <?php echo $row['nic_number']; ?> </td>
 				<td> 

 				<a href="adminedit.php?edit=<?php echo $row['id']; ?> "
 				class=btn btn-info">Edit</a>
 				 <a href="process.php?delete=<?php echo $row['id']; ?> "
 				class=btn btn-danger">Delete</a>



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

        <main class="my-form">              
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register From</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="process.php" method="POST">
                            	<input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control" value="<?php echo $full_name;?>"  placeholder="full_name" name="full_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control"  value="<?php echo $email_address;?>"placeholder="email_address" name="email_address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text"   value="<?php echo $user_name;?>" class="form-control"  placeholder="user_name" name="user_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control" value="<?php echo $phone_number;?>" placeholder="phone_number" name="phone_number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control"  value="<?php echo $Password;?>"  placeholder="Password"  name="Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text"  value="<?php echo $address;?>" " class="form-control" placeholder="address" name="address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nic_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">NIC</abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control"  value="<?php echo $nic_number;?>" placeholder="nic_number" name="nic_number">
                                    </div>
                                </div>
                                <div class="form-group row"> 
                                	<?php
                                	if ($update == true):
                                		?>
                                		<div class="col-md-6 offset-md-4">
                                		<button type="submit" value="submit" name="update" class="btn btn-info"> Update </button>
                                	 <?php else: ?>
                                </div>
                            </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" value="submit" name="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    <?php endif ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
    
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

