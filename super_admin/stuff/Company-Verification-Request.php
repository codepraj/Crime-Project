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
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">  <!-- For iPhone -->
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
                                                      
    
     
       <th data-priority="3">Company Details</th>
                                                       
           <th data-priority="5">Student Details</th>
                                                        
    
           <th data-priority="5">Status</th>
   
                                                        
                                        </tr>
                                                </thead>
                                                <tbody>
                                                <?php   

  
//$sql1 = $obj->db->prepare("select * from company_student_verification where edu_type='completed' AND stud_verification='1' ORDER BY ID DESC");
$sql1 = $obj->db->prepare("SELECT * FROM company_student_verification where  edu_type='completed' AND stud_verification='1' AND ID in (SELECT max(ID) FROM company_student_verification GROUP BY stud_id ) order by ID desc");


    $sql1->execute();
      while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {$i=0;
            $stud_id=$row1['stud_id'];
             $comp_id=$row1['comp_id']; 
             $ver_type=$row1['ver_type'];
             $on_behalf=$row1['on_behalf'];
  $sql = $obj->db->prepare("select * from company where ID='$comp_id'");
  $sql->execute();
   while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
 $company_reg_no=$row['company_reg_no'];
 $company_name=$row['company_name'];
  $company_email=$row['company_email'];
   $company_addreess=$row['company_addreess'];
    $company_logo=$row['company_logo'];
     $company_city=$row['company_city'];
      $company_contact=$row['company_contact'];

   }

      $sql = $obj->db->prepare("select * from student where ID='$stud_id'");
        $sql->execute();
        while($row = $sql->fetch(PDO::FETCH_ASSOC)) {

$Student_name=$row['Student_name'];
 $Student_contact=$row['Student_contact'];
  $Student_email=$row['Student_email'];
   $Student_photo=$row['Student_photo'];
    $age=$row['age'];
     $address=$row['address'];
      $city=$row['city'];   $gender=$row['gender'];            
        }            
            
            ?> 
                                                    <tr>
  <th style="width: 150px;">
    <img height="120" width="120" src="../images/company/<?php echo $company_logo; ?>">
<?php echo "<br>"; echo  "Registration No: ".$company_reg_no;  echo "<br>";
 echo "company name : ".$company_name; echo "<br>"; 
  echo "company email : ".$company_email; echo "<br>";
   echo "company addreess: ".$company_addreess;echo "<br>";
   
    echo "company city : ".$company_city;echo "<br>";
    echo  "company contact: ".$company_contact;echo "<br>";

    echo "<br><br>";
echo "Verification Type: ".$ver_type; echo "<br>";
            echo  "On Behalf of: ".$on_behalf;
?>


  </th>
<th> <img height="120" width="120" src="../images/student_profile/<?php echo $Student_photo; ?>">
<?php echo "<br>"; echo  "Student_name: ".$Student_name;  echo "<br>";
 echo "Student_contact : ".$Student_contact; echo "<br>"; 
  echo "Student_email : ".$Student_email; echo "<br>";
   echo "age : ".$age;echo "<br>";
   
    echo "address : ".$address;echo "<br>";
    echo  "city : ".$city;echo "<br>";
      echo  "gender : ".$gender;echo "<br>";

?><br><br>
<b>Courses Cmpleted</b><br>
<?php
$obj= new Connections();
  $sql11 = $obj->db->prepare("select * from  applied_courses where stud_id='$stud_id'");
  $sql11->execute();
  while($row11 = $sql11->fetch(PDO::FETCH_ASSOC)) {
 $course_id=$row11['course_id'];
 $sql22 = $obj->db->prepare("select * from  courses where ID='$course_id'");
  $sql22->execute();
  while($row22 = $sql22->fetch(PDO::FETCH_ASSOC)) {$i++;
    echo " ";
    echo $row22['course_name']; echo "<br>";
  }

  }
?>



</th>
                    
                       
      <td><?php if($row1['company_verification']=='0')
      { ?><a href="Company-Verification-Request.php?id=<?php echo $row1['ID']; ?>" class="btn btn-primary">Approve</a> <?php }else{ echo "Approved";} ?></td>
                                                                  
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

if(isset($_GET['id']))
{
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$id=$_GET['id'];

$table="company_student_verification";
if($obj->Update_for_application_verification($id,$table)==1)
{
    echo "<script>alert('Student Record Applied for Verification');window.location='Company-Verification-Request.php';</script>";
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


