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
<?php        
		if(isset($_GET['id1']))
		{
		if($_GET['id1']=="done")
		{
		echo "<center><span style='color:red'><strong>Guest Message Deleted</strong></span></center>";
		}
		if($_GET['id1']=="notdone")
		{
		echo "<span style='color:red'>Album Not Deleted</span>";
		}										
		}        
		?>
          


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                
                                <div class="col-md-12">
                                        
                              
                                    </div>
                                
                                <h2 class="title pull-left">Guest  Message</h2>
                                <div class="actions panel_actions pull-right">
                                    
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="table-responsive" data-pattern="priority-columns">
                                            
                                            <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
                                                       <tr>
                                                       
                                                         <th data-priority="1">ID</th>
                                                         <th data-priority="1">State</th> <th data-priority="1">City</th>
                                                         <th data-priority="1">Description</th>
                 
                 <th data-priority="1">Picture</th>                                        
                                                       
                  <th data-priority="1">Time</th>                                           
                    <th data-priority="3">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                
             
             <?php
function spamProbability($text){
    $probability = 0;  
    $text = strtolower($text); // lowercase it to speed up the loop
    $myDict = array("http", "www", ".com", ".mx", ".org",
".net", ".co.uk",
".jp", ".ch", ".info", ".me",
".mobi", ".us", ".biz", ".ca",
".ws", ".ag",".com.co", ".net.co",
".com.ag", ".net.ag", ".it", ".fr",
".tv", ".am", ".asia", ".at", ".be",
".cc", ".de", ".es", ".com.es", ".eu",
".fm", ".in", ".tk", ".com.mx", ".nl", 
".nu", ".tw", ".vg", 
 "buy", "dating", "viagra", "money", "dollars",
"payment", "website", "games", "toys", "poker",
"cheap", "href","nude","cam","penis","pills",
"sale","cheapest", "script",'Mod', 'Owner',
'Mawd', 'M0d', '0wner','090','080','081','070','
091','0-','+','80','81','70','91','dot','f*ck',
'bitch','ww','cum','hacker', '<','>','asd','qwea','sds','vdad','dff','asdad','asd','sdzxc','dfxcv','>xcv','xcv','xcvx','sfsre'); 
    foreach($myDict as $word){
        $count = substr_count($text, $word);
        $probability += .2 * $count;
    }
    return $probability;
}





  //require "includes/connection.php";
  //include 'Application/DB_Functions.php'; // Here we just call the ADB_Fuctions file for provinding the connection
    include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
		    $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
    $name=$_SESSION['sid'];
    $sql = $obj->db->prepare("select * from state_admin where ID='$name'");
    $sql->execute();
    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $state=$row['state'];
        $city=$row['city'];
       
        
    }


  $sql = $obj->db->prepare("select * from  guest_message where resolved_status='1' AND state='$state' AND city='$city' ORDER BY ID DESC");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {

  $string=$row['desc'];

if($string != strip_tags($string)) {
  $spam=1;
}else{ $spam=0;}


$spamProbability=spamProbability($string);

if($spamProbability==0 && $spam==0){
   




			
			?> 
                                                    <tr>
                       <th><?php echo $row['ID']; ?></th>
                          <th><?php echo $row['state']; ?></th>  <th><?php echo $row['city']; ?></th>
                         
                           <th><?php  
							echo $row['desc'];

                          



							?></th>
                          <th>
<?php
$content=$row['img'];
// check if string ends with image extension
if (preg_match('/(\.jpg|\.png|\.bmp)$/', $content)) {
      $type="image";
// check if there is youtube.com in string
} elseif (strpos($content, "youtube.com") !== false) {
     $type="youtube";
// check if there is vimeo.com in string
} elseif (strpos($content, "vimeo.com") !== false) {
     $type="vimeo";
} else {
     $type="text";
}
?>

<?php if($type!='text'){ ?>
 <a href="../images/sus/<?php echo $row['img']; ?>" target="_blank"><img src="../images/sus/<?php echo $row['img']; ?>" height="100" width="100"></a>
<?php }else{ ?>
  <a href="../images/sus/<?php echo $row['img']; ?>" download>Download Video</a>
  <?php
}
?>
</th>
                        
                         <td><?php echo $row['dt']; ?></td>

                      <td><a href="Guest-Message.php?id=<?php echo $row['ID']; ?>" class="btn btn-danger">Delete </a></td>
                                                                  
                                                    </tr>      
                                          <?php   
}else{
   
}} ?>          
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
$table="guest_message";
if($obj->delete($id,$table)==1)
{
	echo "<script>window.location='Guest-Message.php?id1=done';</script>";
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


