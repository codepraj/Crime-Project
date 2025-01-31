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
$string=" i am good boy";

if($string != strip_tags($string)) {
  $spam=1;
}else{ $spam=0;}


$spamProbability=spamProbability($string);

if($spamProbability==0 && $spam==0){
	echo "text is clean";
}else{
	echo "bad text";
}


?>