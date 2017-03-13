<?php

//link to mysql_config.php
require "mysql.php";
//check the null values
if(!empty($_POST['fname']) && !empty($_POST['fpass']) && !empty($_POST['fdept']) && !empty($_POST['fmail']) && !empty($_POST['fmobile']) && !empty($_POST['faddress']))
{
if(isset($_POST['fname']) && isset($_POST['fpass']) && isset($_POST['fdept'])  && isset($_POST['fmail']) && isset($_POST['fmobile']) && isset($_POST['faddress']))
{
	
//values assign to particular variable
$fname=$_POST["fname"];
$fpass=$_POST["fpass"];
$fdept=$_POST["fdept"];
$fmail=$_POST["fmail"];
$fmobile=$_POST["fmobile"];
$faddress=$_POST["faddress"];

//declare the query statement - use sql query
//use this method - $sql = "INSERT INTO `dharuman`.`jmds` (`username`, `dept`, `email`, `mobile`,`address`,`password`) VALUES (\'ram\', \'ram1234\', \'ram54@gmail.com\', \'7432896174\');";
$query="INSERT INTO `jmds` (`UserName`, `password`,`Dept`,`Email`,`mobile`,`Address`) VALUES ('$fname','$fpass','$fdept','$fmail','$fmobile','$faddress')";

//run the query with checking - use mysql_query() function
mysql_query($query);

 echo 
 
 header('Location:'."success.php");
}
}
else
{
	
 	header('Location:'.'alert.php');
}

?>





