<?php
 //mysql link//
 require "mysql.php";
 //to check empty and fill//
 if(!empty($_POST['fname']))
 {
 
 if(isset($_POST['fname']))
 {
  $fname=$_POST['fname'];
 
  #sql query
  $query="DELETE FROM jmds WHERE UserName='$fname'";
  mysql_query($query);
  echo
 header('Location:'."dsuccess.php");
}
}
else
{
	header('Location:'.'alert.php');
}

?>

