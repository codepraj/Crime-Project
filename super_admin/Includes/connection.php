<?php
$sql=mysql_connect("localhost","root","");
mysql_select_db("blockchain_academic_certificate");
if($sql){ echo "connected"; }else
{ echo mysql_error();}
	 ?>

