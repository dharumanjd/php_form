<html>
 <head>
  <title>LOGIN</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../php login/bootstrap.min.css">
 </head>
  <body style="background-color:rgb(128,128,128);color:white;">
    <div class="container-fluid" style="background-color:cyan">
     <h1 style="color:#0000FF ; font-size:300%;padding-top: 10px;
    padding-right: 30px;
    padding-bottom: 10pxpx;
    padding-left: 30px;"><center>MY FRIENDS DETAIS IN UCEV VILLUPURAM</center><h1>
	 </div>
	 <div class="container">
	 <form	action="home1.php" method="POST" class="form-horizontal" role="form">
	 <div class="col-md-12">
	 <center> <h2>Login UserName and password</h2></center><br>
    <div class="form-group">
      <label class="control-label col-md-4"  for="username">UserName:</label>
	  <div class="col-md-4">
      <input type="txet" class="form-control" name="fname" placeholder=" Enter UserName">
    </div>
	</div><br>
	<div class="form-group">
      <label class="control-label col-md-4" for="pwd">Password:</label>
	  <div class="col-md-4">
      <input type="password" class="form-control" name="fpass" placeholder="Enter password">
    </div></div><br>
	 <div class="form-group">
      <label class="control-label col-md-5" for="submit"></label> 
	<button type="submit" class="btn btn-default">Submit</button>
	</div>
	</div>
	</form>
	<br>
	<center><h2>Register and Update and Delete Your Details <h2></center>
     <br>
	<div class="form-group"> 
     <label class="control-label col-sm-4" for="Register"></label>	
	<a href="register.php"><button type="Register" class="btn btn-default">Register</button></a>&nbsp;&nbsp;&nbsp
	<a href="delete.php"><button type="cancel" class="btn btn-default">Delete</button></a>&nbsp;&nbsp;&nbsp
	<button type="cancel" class="btn btn-default">Update</button>
	</div></div>
  </body>
</html>  