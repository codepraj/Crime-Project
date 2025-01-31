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
                                          

                                            <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                      
    
      <th data-priority="2"> Display Picture</th>
       <th data-priority="3">Name</th>
                                                       
           <th data-priority="5">Mobile</th>
                                                        
      <th data-priority="5">Email</th>
           <th data-priority="5">Verification Comes From</th>
   <th data-priority="5">Status</th>

                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php	

	 $comid=$_SESSION['comid'];		

//$sql1 = $obj->db->prepare("select * from company_student_verification where comp_id='$comid' group by stud_id");
$sql1 = $obj->db->prepare("SELECT * FROM company_student_verification where  comp_id='$comid' AND ID in (SELECT max(ID) FROM company_student_verification GROUP BY stud_id ) order by ID desc");
 
   
    $sql1->execute();
      while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
            $stud_id=$row1['stud_id'];  $appliedd_id=$row1['applied_id'];
  $sql = $obj->db->prepare("select * from student where ID='$stud_id'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                                                    <tr>
  <th style="width: 150px;"><img height="120" width="120" src="../images/student_profile/<?php echo $row['Student_photo']; ?>"></th>
                        <th><?php echo $row['Student_name']; ?></th>
                        <td><?php echo $row['Student_contact']; ?></td>
                        <td><?php echo $row['Student_email']; ?></td>
                             <td><?php if($row1['verification_comes_from']=='University'){
echo "University";
                             }else{
                                $instid=$row1['verification_comes_from'];
$sql3 = $obj->db->prepare("select * from college where ID='$instid' ORDER BY ID DESC limit 1");
    $sql3->execute();
    while($row3 = $sql3->fetch(PDO::FETCH_ASSOC)) {
echo $applied_id=$row3['college_name'];

   }
                             } ?></td>
                       
      <td><?php
      echo "Vefirication Type: ->".$row1['ver_type'];echo "<br>";
      echo "On Behalf of: -> ".$row1['on_behalf']; echo "<br><br>";


       if($row1['company_verification']=='0')
      { echo "Pending";}else if($row1['company_verification']=='1' && $row1['stud_verification']=='1'){
        echo "Student Approved from";
if($row1['verification_comes_from']=='University'){
echo " University Succesfully! ";
                             }else{
                               echo " Institute Succesfully!";
   }

       ?>
       <a href="View-Student-Profile.php?id=<?php echo $stud_id; ?>&appliedid=<?php echo $appliedd_id; ?>">View Student Profile</a><?php 
      } ?></td>
         </tr>      
           <?php } ?>  <?php } ?>        
           </tbody>
          </table>



                                        </div>  


                                    </div>
                                </div>
                            </div>
                        </section></div>




<?php    

if(isset($_GET['stud_id']))
{
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$stud_id=$_GET['stud_id'];
$comp_id=$_GET['comp_id'];
$table="company_student_verification";
if($obj->Update_for_application($stud_id,$comp_id,$table)==1)
{
	echo "<script>alert('Student Record Applied for Verification');window.location='View--user.php';</script>";
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


