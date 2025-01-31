<?php
include "Includes/session.php";
?>
<!DOCTYPE html>
<html class=" ">
<head>
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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


            </div>
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
                       
                                <div class="row">
                                   
                                </div> <!-- End .row -->
                                
                                
                            <?php	
  
    include 'Application/DB_Functions.php';
  $obj= new Connections();$uniid=$_SESSION['iid'];
  $sql = $obj->db->prepare("select * from  courses where college_id='$uniid'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$course_name=$row['course_name'];
			$course_image=$row['course_image'];
			$course_conent=$row['course_conent'];
			$course_duration=$row['course_duration'];
			$course_fees=$row['course_fees'];
			$dt=$row['dt'];$ID=$row['ID'];
			?> 
                                                                 
                                                     
                                
<a href="course_details.php?id=<?php echo $ID; ?>">
                                
                                 <div class="col-lg-4 col-md-4 col-xs-6 col-sm-4">

                                        <div class="tile-progress bg-info" style="height: 350px;">
                                            <div class="content">
           
                                           
                        <img src="../notes/<?php echo $course_image; ?>" style="width:100%;height:200px;"> <br><br><p style="text-align: center;">   <?php echo $course_name; ?> <b> <br> Duration:   <?php echo $course_duration; ?>     <br> Fees:   <?php echo $course_fees; ?>  </b>            </p> 
                                            </div>
                                        </div>

                                    </div>
                                </a> 
                                
                     <div class="col-lg-8 col-md-4 col-xs-6 col-sm-4">

                                        <div class="tile-progress bg-info" style="min-height: 350px;">
                                            <div class="content">
           
                   
  <h3>Student Apply for this Course</h3>                                                     
           
  <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered ">
      <thead>
          <tr>
             
               <th data-priority="1">Photo</th>
               <th data-priority="1">Name Details</th> 
                
                   <th data-priority="1">Address</th>
                     <th data-priority="1">City</th>  
                     <th data-priority="1">Gender</th> 
                          <th data-priority="1">Date</th>  
            
                        <th data-priority="1">University Approval</th>  
              
          </tr>
      </thead>
      <tbody>
      
      
             <?php	
 $sql1 = $obj->db->prepare("select * from  applied_courses where course_id='$ID'");
  $sql1->execute();
	while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
		$idstudd=$row1['stud_id'];$IDCourse=$row1['ID'];
		$university_approve_status=$row1['university_approve_status'];
		$course_complete_status=$row1['course_complete_status'];
		
  $obj= new Connections();
  $sql2 = $obj->db->prepare("select * from  student where ID='$idstudd'");
  $sql2->execute();
	while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
          <tr>
  <th><img src="../images/student_profile/<?php echo $row2['Student_photo']; ?>" height="50" width="50"></th>
     <th><?php echo $row2['Student_name']; ?><br><?php echo $row2['Student_contact']; ?><br><?php echo $row2['Student_email'];  ?><br><?php echo $row2['age']; ?> Years</th>
   
     
     <th><?php echo $row2['address']; ?></th>
    <th><?php echo $row2['city'];  ?></th>
    <th><?php echo $row2['gender'];  ?></th>
     <th><?php echo $row2['dt'];  ?></th>
 <th><?php if($university_approve_status==0){echo "Pending";}else{echo "Approved";}  ?>
<?php if($university_approve_status==1 && $course_complete_status==0){echo "
<br><br><a href='Mark-Student-Completion.php?mark=$IDCourse' class='btn btn-primary'>Mark as Complete</a>
 ";}/*else{ echo "<br><br><span style='color:pink;'>Course Completed</span>";} */  ?>	

 </th>
   
          </tr>      
<?php }} ?>          
      </tbody>
  </table>     
                                            </div>
                                        </div>

                                    </div>
                                </a>                                    
                                                    </tr>      
                                          <?php } ?>          
                                                </tbody>
                                            </table>            
                                
                            
      
                                    
</div>


                </section>
            </section>
            <!-- END CONTENT -->
         


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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

</html>




<?php
include "Includes/connection.php";
if(isset($_GET['mark'])){
$mark=$_GET['mark'];


$sql="UPDATE applied_courses SET course_complete_status='1' where ID='$mark'";
$execute_query=mysql_query($sql);
if($execute_query){
?><script>alert('Mark Course Completed Successfully!!');
window.location='Mark-Student-Completion.php';</script>
<?php 	
}else{
echo mysql_error();	
}



}
?>