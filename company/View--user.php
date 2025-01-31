<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html><?php
session_start();
 
    include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
?>
<!DOCTYPE html>
<html class=" ">
<head>

        <title> Admin</title>


        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/responsive-tables/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
 
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
         <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                                         </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                
                                <div class="col-md-12">
                                        
                              
                                    </div>
                                
                                <h2 class="title pull-left">Apply for Verification</h2>
                                <div class="actions panel_actions pull-right">
                                    
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <form action="" method="POST">
   <input type="text" name="search" placeholder="Search by Student Name" class="form-control"><br>
   <input type="submit" name="" class="btn btn-primary" value="Search"></form><br><br>

<?php if(isset($_POST['search'])){ ?>
                                            <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                      
    
      <th data-priority="2"> Display Picture</th>
       <th data-priority="3">Name</th>
                                                       
           <th data-priority="5">Mobile</th>
                                                        
      <th data-priority="5">Email</th>
           <th data-priority="5">Action</th>
   
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php	

	$search=$_POST['search'];		
  $sql = $obj->db->prepare("select * from student where Student_name like '%$search%'");
	$sql->execute();
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		$idd=$row['ID'];

         $sql1 = $obj->db->prepare("select * from applied_courses where stud_id='$idd' AND course_complete_university_status='0'  ORDER BY ID DESC limit 1");
    $sql1->execute();
    $persuing_count=$sql1->rowCount();
    $sql1 = $obj->db->prepare("select * from applied_courses where stud_id='$idd' AND course_complete_university_status='1'  ORDER BY ID DESC limit 1");
    $sql1->execute();
    $completed_count=$sql1->rowCount();

    $sql1 = $obj->db->prepare("select * from applied_courses where stud_id='$idd' ORDER BY ID DESC limit 1");
    $sql1->execute();
    while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
$applied_id=$row1['ID'];
$course_id=$row1['course_id'];$institute_id=$row1['institute_id'];
   }
			?> 
                                                    <tr>
  <th style="width: 150px;"><img height="120" width="120" src="../images/student_profile/<?php echo $row['Student_photo']; ?>"></th>
                        <th><?php echo $row['Student_name']; ?></th>
                        <td><?php echo $row['Student_contact']; ?></td>
                        <td><?php echo $row['Student_email']; ?></td>
                       
       <td>
        <form action="" method="get">
            <input type="hidden" name="applied_id" value="<?php echo $applied_id; ?>">
                <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">

                  <input type="hidden" name="verification_comes_from" value="<?php if($persuing_count==1){
               echo $verification_comes_from=$institute_id;
              }else if($completed_count==1){   echo $verification_comes_from="University";}  ?>">

            <input type="hidden" name="stud_id" value="<?php echo $row['ID']; ?>">
            <input type="hidden" name="comp_id" value="<?php echo $_SESSION['comid'];  ?>">
              <input type="hidden" name="edu_type" value="<?php if($persuing_count==1){
                echo "pursuing";
              }else if($completed_count==1){echo "completed";}  ?>">

         

             <br><select name="vertype" required="" class="form-control">
               <option value=""> Select Verification Type</option>
               <option value="Direct"> Direct Verification</option>
               <option value="Indirect"> Indirect Verification</option>
            </select>

            

            <label>If This Verification is on behalf of any company then mention it below</label><br>
           <input type="text" name="onbehalf" placeholder="Main Company Name" class="form-control">
       <br>  <input type="submit" class="btn btn-primary" value="Apply for Verification"> 
</form>
    </td>
                                         
                                                                  
                                                    </tr>      
                                          <?php } ?>          
                                                </tbody>
                                            </table>
<?php } ?>


                                        </div>  


                                    </div>
                                </div>
                            </div>
                        </section></div>




<?php    

if(isset($_GET['stud_id']))
{
 if(empty($_GET['edu_type']))
{
    echo "<script>alert('No courses Applied By This Student Yet!');window.location='View--user.php';</script>";
}else{


$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$stud_id=$_GET['stud_id'];
$comp_id=$_GET['comp_id'];
$vertype=$_GET['vertype'];
$onbehalf=$_GET['onbehalf'];
$edu_type=$_GET['edu_type'];
$applied_id=$_GET['applied_id'];
$course_id=$_GET['course_id'];
$verification_comes_from=$_GET['verification_comes_from'];

$table="company_student_verification";
if($obj->Update_for_application($stud_id,$comp_id,$table,$vertype,$onbehalf,$edu_type,$applied_id,$course_id,$verification_comes_from)==1)
{
	echo "<script>alert('Student Record Applied for Verification');window.location='View--user.php';</script>";
}}

}


?> 

                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                   


                    <h4 class="group-head">Favourites</h4>
                    
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/responsive-tables/js/rwd-table.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 


    </body>

</html>


