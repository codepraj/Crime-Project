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
                                                      
    
      <th data-priority="2"> QR CODE</th>
       <th data-priority="3">Name & GRADE</th>
                                                       
           <th data-priority="5">Program</th>
                                                        
      <th data-priority="5">Student Name</th>
           <th data-priority="5">Hash</th>
   
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php   

 
  $sql = $obj->db->prepare("select * from blockchain_powred_certificate ORDER BY ID DESC");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                     $hash_sha_generated=$row['hash_sha_generated'];
                      $ID=$row['ID'];
             $qrlink="localhost/me/nayan/qr.php?id=$hash_sha_generated"; 

            ?> 
                                                    <tr>
  <th style="width: 150px;">  <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=local<?php echo $qrlink; ?>&choe=UTF-8" title="Link to Google.com" height="150" width="150" /></th>
                        <th><?php echo $row['stud_name']; ?><br><?php echo $row['grade']; ?></th>
                        <td><?php echo $row['course_name']; ?></td>
                        
                        <td>
<?php   $sql11 = $obj->db->prepare("select * from proof_of_work where blockchain_id='$ID' ORDER BY ID DESC LIMIT 1");
  $sql11->execute(); $countt=$sql11->rowCount();

if($countt==0){
   echo "<a title='Proof of Work Generated! Status: Success!'> <span style='padding:10px;background-color:green;color:white;'>".$row['hash_sha_generated']."</span></a>";   
}else{
  while($row11 = $sql11->fetch(PDO::FETCH_ASSOC)) {  $status=$row11['status']; ?>
                            <?php 

if($status=='1'){
  echo "<a title='Proof of Work Generated! Status: Success!'> <span style='padding:10px;background-color:green;color:white;'>".$row['hash_sha_generated']."</span></a>"; 
                        }else{
echo "<a title='It Seems Like Someone Manipulate data on the server with this block! Status: Failure! '><span style='padding:10px;background-color:red;color:white;'>".$row['hash_sha_generated']."</span></a>"; 
                        }

                             ?>
                                
<?php }} ?> </td>
                       
      <td>
        <form action="" method="POST">
<input type="hidden" name="course_name" value="<?php echo $row['course_name']; ?>">
<input type="hidden" name="stud_name" value="<?php echo $row['stud_name']; ?>">
<input type="hidden" name="college_id" value="<?php echo $row['college_id']; ?>">
<input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
<input type="hidden" name="course_id" value="<?php echo $row['course_id']; ?>">
<input type="hidden" name="grade" value="<?php echo $row['grade']; ?>">
<input type="hidden" name="blockchainid" value="<?php echo $ID; ?>">
<input type="hidden" name="hash_sha_generated" value="<?php echo $row['hash_sha_generated']; ?>">
<?php 

if($countt==0){ ?>
<input type="submit"  value="Mine this Transcation"> <?php
    }else{
if($status=='1'){
    ?>
<input type="submit"  value="Mine this Transcation">
<?php }else{ ?>
<input type="submit" disabled=""  value="Mine this Transcation">

<?php }} ?>

         </form>
   
                                                                  
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

if(isset($_POST['course_name']))
{
    $course_name=$_POST['course_name'];
    $stud_name=$_POST['stud_name'];
    $college_id=$_POST['college_id'];
    $student_id=$_POST['student_id'];
    $course_id=$_POST['course_id'];
    $grade=$_POST['grade'];
    $hash_sha_generated=$_POST['hash_sha_generated'];


    $blockchain_hash=sha1($course_name.$stud_name.$college_id.$student_id.$course_id.$grade);

 
if($blockchain_hash==$hash_sha_generated){
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$blockchainid=$_POST['blockchainid'];
$minid=$_SESSION['minid'];

$table="proof_of_work";
if($obj->proof_of_work($blockchainid,$minid,$student_id,$course_id)==1)
{

    echo "<script>alert('Proof of Work Generated! Status: Success!');window.location='Company-Verification-Request.php';</script>";
}

}else{

$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$blockchainid=$_POST['blockchainid'];
$minid=$_SESSION['minid'];

$table="proof_of_work";
if($obj->proof_of_work1($blockchainid,$minid,$student_id,$course_id)==1)
{

 echo "<script>alert('It Seems Like Some one Manipulate data on server with this block! Status: Failure!');window.location='Company-Verification-Request.php';</script>";

}



}

    /*
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$id=$_GET['id'];

$table="company_student_verification";
if($obj->Update_for_application_verification($id,$table)==1)
{
    echo "<script>alert('Student Record Applied for Verification');window.location='Company-Verification-Request.php';</script>";
}
*/
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


