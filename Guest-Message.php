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
    background-color:black;
    border-color: black;
}
</style>  
        <script src="super_admin/js/countries.js" type="text/javascript"></script>
<script type="text/javascript">
function selectCity(country_id){
	if(country_id!="-1"){
		loadData('state',country_id);
		$("#city_dropdown").html("<option value='-1'>Select Sub Category</option>");	
	}else{
		$("#state_dropdown").html("<option value='-1'>Select Sub Category</option>");
		$("#city_dropdown").html("<option value='-1'>Select Sub Category</option>");		
	}
}

function selectState(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}

function loadData(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "loadData.php",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select Sub Category</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}
</script>

</head>
<body>


<?php include "includes/header.php"; ?><?php 
 $obj= new Connections();
 $sql = $obj->db->prepare("select * from  guest_message ORDER BY ID DESC LIMIT 1");
 $sql->execute();
 while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
 	$previous_hash=$row['current_hash'];
}
if(isset($_POST['state']))
{

$state = $_POST['state'];
$city = $_POST['city'];
$Suspecious_Activity =$_POST['Suspecious_Activity'];
 $file=$_FILES['file']['name'];

$current_hash=sha1($state.$city.$Suspecious_Activity.$file);
if($obj->insert_guest_message($state,$city,$Suspecious_Activity,$file,$current_hash,$previous_hash)==1)
{

 echo "<script>alert('You have submitted your data Succesfully!!');window.location='Guest-Message.php';</script>";
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
				  <img src="web/images/121.avif" style="width: 100%;">
				</div>
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2 style="color:white;">Upload Suspecious Activity you Witnessed</h2>
	 <form method="post" action="" enctype="multipart/form-data">
		
    	<div>	
    <span>
                Enter State Admin State
                            </span><span>
                         <select onChange="print_state('state',this.selectedIndex);" style="" id="country" name ="state" class="form-control" required ></select></span></div>
	                  <div>   
						<span>
               Select City
                           </span><select name="city" id ="state" style=" " class="form-control" required> 
							<option>Select Destination</option>
							</select>
							<script language="javascript">print_country("country");</script>
								
						
                        </div><br>   	


<div>
						    	<span> Describe Suspecious Activity you Witnessed</span>
<span><textarea type="text"  pattern="[a-zA-Z ]+" title="Only Characters and Space Allowed" required  name="Suspecious_Activity" class="form-control" id="userName" style="border:#999 solid 1px; height:90px;"></textarea>
</span>
</div>

	   <div>
						    	<span> Image if any</span>
						    	<span><input type="file" required name="file" class="form-control" id="inputEmail3"></span>
						    </div>
                            
 	
						    
                         <div>
						   		<label class="fa-btn btn-1 btn-1e">
                                <input type="submit" value="Submit">
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