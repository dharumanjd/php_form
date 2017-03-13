<?php

//link to mysql_config.php
require "mysql.php";

//check the null values
if(!empty($_POST['fname']) && !empty($_POST['fpass']) )
{
if(isset($_POST['fname']) && isset($_POST['fpass']) )
{
	
//values assign to particular variable
$uname=$_POST["fname"];
$pass=$_POST["fpass"];

//declare the query statement - use sql query "`" symbol used
$query="SELECT * FROM `jmds`";

//run the query with checking - use mysql_query() function
if($query_run=mysql_query($query))
{
	//fetch the one by one value - use mysql_fetch_assoc() function
	while($query_row=mysql_fetch_assoc($query_run))
	{
		//assign db value to another variable
		$user_db=$query_row['UserName']; 
		$pass_db=$query_row['password'];
		
		//check username and password
		if($uname == $user_db && $pass==$pass_db)
        {
			//display the user details
	        echo "Welcome &nbsp;&nbsp;&nbsp;&nbsp;"."$uname"."<br>";
			echo "Dept Name :&nbsp;&nbsp;&nbsp;&nbsp;".$query_row['Dept']."<br>";
			echo "Mail id :&nbsp;&nbsp;&nbsp;&nbsp;".$query_row['Email']."<br>";
			echo "Mobbil no :&nbsp;&nbsp;&nbsp;&nbsp;".$query_row['mobile']."<br>";
			echo "Address :&nbsp;&nbsp;&nbsp;&nbsp;".$query_row['Address']."<br>";
			
			//success to find
			$ok=1;
        }
        
		
	}
}
//wrong details
if($ok!=1)
{
	echo"UserName and Password are incorrect";
}
}
}
else
{
	include('alert.php');
}

?>