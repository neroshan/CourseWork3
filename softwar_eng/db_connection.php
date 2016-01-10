<?php
/*
$hostname="elephant.ecs.westminster.ac.uk";
$user = "w1564380";
$password="tamil1";
$password="DwhTSZHFK05f";

$database="w1564380_0";
*/


/*
$hostname="localhost";
$user = "root";
$password="tamil1";
$password="";

$database="londonCollege";



$hostname="mysql.hostinger.co.uk";
$user = "u209615393_ni";
$password="coursework";

$database="u209615393_db";

$con = mysql_connect($hostname,$user,$password) or die(mysql_error());
$select_db = mysql_select_db($database,$con);

if(isset($con)){
	
}else{
	die(mysql_error());
}

*/
/*

DEFINE ('DB_HOST','mysql.hostinger.co.uk');
DEFINE ('DB_USER', 'u209615393_ni'); 
DEFINE ('DB_PASSWORD', 'coursework'); 
DEFINE ('DB_NAME', 'u209615393_db'); 
*/

DEFINE ('DB_HOST','localhost');
DEFINE ('DB_USER', 'root'); 
DEFINE ('DB_PASSWORD', ''); 
DEFINE ('DB_NAME', 'software_eng'); 


// Make connection

$conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
   if (!$conn) {
   die('Did not connect to MySQL: ' . mysql_error()); 
   }
//select the database
 mysql_select_db(DB_NAME,$conn);


?>