<?php 
//Databaser variables.
$dbhost = "127.0.0.1";
//$dbport = "3306";
//$dbsocket = "";
$dbuser = "root";
$dbpassword = "";
$dbname = "mobipay";

//Creating database connection
$dbconnect = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

//Check connection
if(mysqli_connect_errno()){
echo "Could not connect to the database server" . mysqli_connect_error();
} 

?><!-- END OF DATABASE CONNECTION -->