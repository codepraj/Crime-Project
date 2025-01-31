<?php
session_start();
if(isset($_SESSION['name'])){
 echo "<script>window.location='student/dashboard.php';</script>";
	
}
?><!DOCTYPE HTML>
<html>
<head>
<title>Develop an IT enabled framework/mechanism through which a person can give tipoff 
about any suspicious activity/ crime to the authorities</title>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/web/css/font-awesome.min.css">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
<style type="text/css">
	    .navbar{margin-bottom:0px;}.navbar-inverse .navbar-brand{ color: white;}
.navbar-inverse .navbar-nav>li>a {
    color: #ffffff;
}
	    .navbar-inverse {
    background-color:black;
    border-color: black;
}
</style>
</head>
<body>
<?php include "includes/header.php"; ?>

<?php
//include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function


 if(isset($_POST['username']) && isset($_POST['password']))
            {
        $name=$_POST['username'];
        $password=$_POST['password']; 

        if ($obj->CheckLogin($name,$password)==TRUE) // Here we call the CheckLogin function for admin login through the object        
        {
          
		
    
  	$obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	$sql = $obj->db->prepare("select * from agents where userid='$name'");
	$sql->execute();
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		 $_SESSION['name']=$row['userid'];
		 $_SESSION['sid']=$row['ID']; 
		
		
	}
	echo "<script>window.location='agent/dashboard.php';</script>";
	}
        else
        {
        echo "<script>alert('Incorrect Username and Password');</script>";
        }

} ?>
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<br><br>
			    <div class="col-md-6 company_ad">
				  <img src="web/images/login.jpg" style="width: 100%;">
				</div>
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2 style="color:white;">Agent Login</h2>
					    <form method="POST" action="">
					    	<div>
<span>Email</span>
<span><input type="text" name="username" required class="form-control" id="userName"></span>
						    </div>
						    <div>
						    	<span>Password</span>
<span><input type="password" name="password" required class="form-control" id="inputEmail3"></span>
						    </div>
						   
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	 
</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>