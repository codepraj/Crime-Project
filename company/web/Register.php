<?php session_start(); ?>
<!DOCTYPE html>
<html class=" ">
<head>
       
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Ultra Admin : Registration Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

      
        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page" style="background-color:grey;">
<center>
<br><Br>
</center>

        <div class="register-wrapper"  style="margin-top:-180px;">
            <div id="register" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
               

                <form name="loginform" id="loginform" action="Register.php" method="post">
                    <p>
                        <label for="user_login">First Name<br />
                            <input type="text" name="f_name" id="user_login" class="input" value="" size="20" /></label>
                    </p>
                     <p>
                        <label for="user_login">Last Name<br />
                            <input type="text" required name="l_name" id="user_login" class="input" value="" size="20" /></label>
                    </p>
                    <p>
                        <label for="user_login">Employee Id<br />
                            <input type="text" required name="empid" id="user_login" class="input" value="" size="20" /></label>
                    </p>
                    
                    <p>
                        <label for="user_pass">Password<br />
                            <input type="password" required name="password" id="user_pass" class="input" value="" size="20" /></label>
                    </p>
                   

 <p>
                        <label for="user_pass">Branch<br />
                            
                <select name="branch" required class="form-control">
                <option value="">Select Branch</option>
                 <option value="CS">Computer Science</option>
                  <option value="EXTC">Electronics</option>
                    <option value="Mechanical">Mechanical</option>
                     <option value="IT">Information Technology</option>
                </select>            </label>
                    </p>


                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign Up" />
                    </p>
                </form>

                <p id="nav">
                   <strong>  <a class="pull-right" href="index.php" title="Sign Up"  style="color:black;">Login</a>
              </strong>  </p>
                <div class="clearfix"></div>
               

            </div>
        </div>





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
        <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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

<!-- Mirrored from jaybabani.com/ultra-admin/ui-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 10:38:45 GMT -->
</html>


<?php
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['f_name']))
{
$first_name = $_POST['f_name'];
$last_name = $_POST['l_name'];
$empid = $_POST['empid'];
$password = md5($_POST['password']);

$contact="";
$gender="";
$dob="";
$branch = $_POST['branch'];

if($obj->insert_faculty($first_name,$last_name,$empid,$password,$contact,$gender,$dob,$branch)==1)
{	

 echo "<script>alert('Registration Completed Succesfully!! Please Waight for Admin Approval');</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}
}

?>

