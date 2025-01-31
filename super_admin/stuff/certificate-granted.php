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
  $obj= new Connections();
 
            $ID=$_GET['mark'];
 $sql1 = $obj->db->prepare("select * from  applied_courses where ID='$ID'");
  $sql1->execute();
	while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
		$idstudd=$row1['stud_id'];$IDCourse=$row1['ID'];
		 $university_approve_status=$row1['university_approve_status'];
		$course_complete_status=$row1['course_complete_status']; $course_id=$row1['course_id'];


 $obj= new Connections();
$sql3 = $obj->db->prepare("select * from  courses where ID='$course_id'");
  $sql3->execute();
	while($row3 = $sql3->fetch(PDO::FETCH_ASSOC)) {
		$course_name=$row3['course_name']; $college_id=$row3['college_id'];
}

		
  $obj= new Connections();
  $sql2 = $obj->db->prepare("select * from  student where ID='$idstudd'");
  $sql2->execute();
	while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
		$stud_name=$row2['Student_name'];	
			?> 
      

 
   
            
<?php }} ?>          
<h3><b>Program Name: </b><?php echo $course_name; ?> </h3>   
<h3><b>Student Name: </b><?php echo $stud_name; ?> </h3>   
              
<form action="" method="POST">
	<input type="hidden" name="course_name" value="<?php echo $course_name; ?>"><input type="hidden" name="stud_name" value="<?php echo $stud_name; ?>">
	<input type="hidden" name="college_id" value="<?php echo $college_id; ?>">
	<input type="hidden" name="student_id" value="<?php echo $idstudd; ?>">
	<input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
	




	<select class="form-control" name="grade">
		<option value="">Select Grade</option>
		<option value="A++">10.0 to 8.5 (A++ Grade)</option>
		<option value="A+">8.5 to 7.0 A+ Grade</option>
		<option value="A">7.0 to 5.5 A Grade</option>
		<option value="B++">5.5 to below B++ Grade</option>
		
	</select>
<br>
<input type="submit" class="btn btn-info" name="">


</form>

                                            </div>
                                        </div>

                                    </div>
                                </a>                                    
                                                    </tr>      
                                         
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
if(isset($_POST['course_name'])){
$mark=$_GET['mark'];
$course_name=$_POST['course_name'];
$stud_name=$_POST['stud_name'];
$college_id=$_POST['college_id'];
$student_id=$_POST['student_id'];
$course_id=$_POST['course_id'];
$grade=$_POST['grade'];
$blockchain_hash=sha1($course_name.$stud_name.$college_id.$student_id.$course_id.$grade);

$sql="UPDATE applied_courses SET course_complete_university_status='1' where ID='$mark'";
$execute_query=mysql_query($sql);
if($execute_query){
$sql1="select * from blockchain_powred_certificate ORDER BY ID DESC LIMIT 1";
$query=mysql_query($sql1);
while($row6=mysql_fetch_array($query)){
	$previous_hash_generated=$row6['hash_sha_generated'];
}
 $sql1="INSERT INTO `blockchain_academic_certificate`.`blockchain_powred_certificate` (`grade`, `course_name`,`stud_name`, `college_id`, `student_id`, `course_id`, `previous_hash_generated`, `hash_sha_generated`, `university_verification_status`) VALUES ('$grade', '$course_name', '$stud_name', '$college_id', '$student_id', '$course_id', '$previous_hash_generated', '$blockchain_hash', '1');";
$execute_query1=mysql_query($sql1);
if($execute_query1){

?><script>alert('Mark Course Completed Successfully!!');
window.location='certificate-granted-Successfully.php?id=<?php echo $_GET['mark']; ?>';</script>
<?php 	
}}else{
echo mysql_error();	
}



}
?>
