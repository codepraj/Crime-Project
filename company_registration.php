<?php
session_start();
if(isset($_SESSION['name'])){
 echo "<script>window.location='index.php';</script>";
	
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
    background-color: #27639f;
    border-color: #125eaa;
}
</style>
</head>
<body>


<?php include "includes/header.php"; ?><?php 

$obj= new Connections(); 
if(isset($_POST['reg_no']))
{
$reg_no = $_POST['reg_no'];
$f_name = $_POST['f_name'];
$email = $_POST['email'];
$password =$_POST['password'];
$contact = $_POST['contact'];

$add = $_POST['add'];
$contact = $_POST['contact'];
$city = $_POST['city'];



$file=$_FILES['file']['name'];
if($obj->insert_company_reg($reg_no,$f_name,$email,$password,$contact,$add,$city,$file)==1)
{
/*$obj= new Connections(); 
$sql = $obj->db->prepare("select * from student where email='$email'");
$sql->execute();
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	$user_id=$row['ID'];
	$_SESSION['id']=$user_id;
	$_SESSION['email']=$email;
	$_SESSION['name']=$first_name;
}*/

 echo "<script>alert('You have submitted your data Succesfully!!');window.location='company_login.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}}
 ?>



<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<br><br>
			    <div class="col-md-6 company_ad">
				  <img src="web/images/wp2019260.jpg" style="width: 100%;">
				</div>
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Company Registration</h2>
	 <form method="post" action="" enctype="multipart/form-data">
		
    			    <div>
						    	<span>Company Registration No</span>
<span><input type="text" required name="reg_no" class="form-control" id="userName">
</span>
						    </div>



<div>
						    	<span>Company Name</span>
<span><input type="text"  pattern="[a-zA-Z ]+" title="Only Characters and Space Allowed" required  name="f_name" class="form-control" id="userName">
</span>
</div>

	   <div>
						    	<span>Company E-mail</span>
						    	<span><input type="email" required name="email" class="form-control" id="inputEmail3"></span>
						    </div>
                             <div>
						    	<span>Company Password</span>
						    	<span><input type="password" required name="password" class="form-control" id="inputEmail3"></span>
						    </div>
    
                     <div>
						    	<span>Company Contact</span>
<span><input type="text" maxlength="10" required name="contact" class="form-control" id="userName">
</span>
						    </div>
                           
						    
                            
                 
 <div>
						    	<span>Company Address</span>
<span><textarea required name="add" class="form-control" id="userName" style="border: 1px solid #ccc;"></textarea>
</span>
						    </div>
		
        
              
						   

                          <div>
						    	<span>Company Logo</span>
<span><input type="file" maxlength="10" required name="file" class="form-control" required="">
</span>
						    </div>  




				   
                          <div>
						    	<span>Company Contact</span>
<span><input type="number" maxlength="40" required name="city" class="form-control" id="userName">
</span>
						    </div>

                            
                         <div>
						   		<label class="fa-btn btn-1 btn-1e">
                                <input type="submit" value="Register">
                                </label>
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