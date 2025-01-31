<?php
session_start();
?>
<!DOCTYPE html>
<html class=" ">
<head>

        <title>Comapny Login</title>


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
             <h1 class="title">Tour Details</h1>         </div>

     </div>
 </div>
 <div class="clearfix"></div>

 <div class="col-lg-12">
     <section class="box ">
         <header class="panel_header">
             
             <div class="col-md-12">
  
           
                 </div>
             
            
             <div class="actions panel_actions pull-right">
                 
             </div>
         </header>
         <div class="content-body">    <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                 
<a href="My-tour.php" class="btn btn-primary" style="float:right;"> Back</a><br><br>
  <div class="table-responsive" data-pattern="priority-columns" style="padding:20px;">
      

     
          <?php	
  
    include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that 	
  $id=$_GET['id'];		
  $sql = $obj->db->prepare("select * from tour_package where ID='$id'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?>  <strong>Tour Images:<br><br>
    
             <img src="../images/tour/<?php echo $row['image1']; ?>" style="height:200px; width:200px;">
     <img src="../images/tour/<?php echo $row['image2']; ?>" style="height:200px; width:200px;">
     <img src="../images/tour/<?php echo $row['image3']; ?>" style="height:200px; width:200px;"><br><br>
       
<h3> <strong> <h3>Tour Title:  <?php echo $row['tour_title']; ?></h3></strong></h3>
   <strong>Area:  <?php echo $row['area']; ?></strong><br><br>
   <strong>Season:  <?php echo $row['season']; ?></strong><br><br>
    <strong>Tour Type : <?php echo $row['type']; ?></strong><br><br>
  <strong>Tour Price:  <?php echo $row['tour_price']; ?></strong><br><br>
   <strong>Destination: <?php echo $row['destination']; ?></strong><br><br>
   <strong>No of Days: <?php echo $row['no_of_days']; ?></strong><br><br>
    <strong>Starts From: <?php echo $row['strats_from']; ?></strong><br><br>
     <strong>Frequency: <?php echo $row['frequency']; ?></strong><br><br>
     
      <strong>Hotel: <?php echo $row['hotel']; ?></strong><br><br>
     <strong>Includes: <?php echo $row['includes']; ?></strong><br><br>
     <strong>Description: <?php echo $row['description']; ?></strong><br><br>
    
    
      	                 <?php } ?>          
          </tbody>
      </table>
  </div>  


                 </div>
             </div>
         </div>
     </section></div>



 

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


