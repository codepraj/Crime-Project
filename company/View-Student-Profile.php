<?php
session_start();
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
           
           <h2 class="title pull-left">Students Details</h2>
           <div class="actions panel_actions pull-right">
               
           </div>
       </header>
       <div class="content-body">    <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">

                   <div class="table-responsive" data-pattern="priority-columns">
  
  <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
      <thead>
          <tr>
             
               <th data-priority="1">Photo</th>
               <th data-priority="1">Student Details</th>
               
                 <th data-priority="1">Age</th>
                   <th data-priority="1">Address</th>
                     <th data-priority="1">City</th>  
                     <th data-priority="1">Gender</th> 
                          <th data-priority="1">Date</th>  
               
              
          </tr>
      </thead>
      <tbody>
      
      
             <?php	
  include 'Application/DB_Functions.php';
  $obj= new Connections();
  $id=$_GET['id'];  $appliedid=$_GET['appliedid'];
  $sql = $obj->db->prepare("select * from  student where ID='$id'");
  $sql->execute();
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$ID=$row['ID'];$i=0;
			?> 
          <tr>
  <th><img src="../images/student_profile/<?php echo $row['Student_photo']; ?>" height="150" width="150"></th>
     <th><?php echo $row['Student_name']; ?><br>
     <?php echo $row['Student_contact']; ?><br>
     <?php echo $row['Student_email']; ?>
<h5>Students Persuing Courses</h5>
<?php
$obj= new Connections();

  $sql1 = $obj->db->prepare("select * from  applied_courses where stud_id='$ID' AND course_complete_university_status='0' AND university_approve_status='1' AND ID<='$appliedid'");
  $sql1->execute();
  while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
 $course_id=$row1['course_id'];
 $sql2 = $obj->db->prepare("select * from  courses where ID='$course_id'");
  $sql2->execute();
  while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {$i++;
    echo $i; echo " ";
    echo $row2['course_name']; echo "<br>";
  }

  }
?>
<Br>
<h5>Blockchain Powered Certificate</h5>
<?php
$obj= new Connections();
  $sql1 = $obj->db->prepare("select * from  blockchain_powred_certificate where student_id='$ID'");
  $sql1->execute();
  while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
  $course_id=$row1['course_name']; 
 $idd=$row1['ID'];
 echo "<a href='certificate.php?courseid=$idd' target='_blank'>".$course_id."</a>";echo "<br>";

  }
?>
   </th>
   
     <th><?php echo $row['age']; ?></th>
     <th><?php echo $row['address']; ?></th>
    <th><?php echo $row['city'];  ?></th>
    <th><?php echo $row['gender'];  ?></th>
     <th><?php echo $row['dt'];  ?></th>
     
          </tr>      
<?php } ?>          
      </tbody>
  </table>                
  
           
                   </div>  


               </div>
           </div>
       </div>
   </section></div>




<?php    

if(isset($_GET['ssid']))
{
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$id=$_GET['id'];
$table="notification";
if($obj->delete($id,$table)==1)
{
	echo "<script>window.location='Notification-delete.php?id1=done';</script>";
}

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




<?php
//include "Includes/connection.php";
if(isset($_POST['stud_id'])){
$stud_id=$_POST['stud_id'];

$sql1="select * from applied_courses where stud_id='$stud_id' AND course_id='$course_id'";
$query=mysql_query($sql1);
$count=mysql_num_rows($query);
if($count==0){
$sql="insert into applied_courses(`stud_id`,`course_id`) values('$stud_id','$course_id')";
$execute_query=mysql_query($sql);
if($execute_query){
echo "<script>alert('You Have Successfully Apply!!');window.location='course_details.php?id=$course_id';</script>";	
}else{
echo mysql_error();	
}
}else{
echo "<script>alert('You Have Already Apply!!');</script>";		
}


}
?>