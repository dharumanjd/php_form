<html>
<head>
<title>Registeration form </title>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../php login/bootstrap.min.css">
</head>
<body style="background-color:rgb(128,128,128);color:white;">
  <div class="container-fluid" style="background-color:cyan;">
     <h1 style="color:#0000FF ; font-size:300%;padding-top: 5px;
    padding-right: 5pxpx;
    padding-bottom: 5pxpx;
    padding-left: 5pxpx;"><center>Registeration Form</center><h1>
	 </div><br>	
	 <div class="container">
	 <form  action="reg.php" method="POST" class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-4" for="username">UserName:</label>
	  <div class="col-sm-4">
      <input type="text" class="form-control" name="fname" placeholder="Enter your Name">
    </div>
	</div>
	<div class="form-group">
      <label  class="control-label col-sm-4"for="password">Password:</label>
	  <div class="col-sm-4">
      <input type="password" class="form-control" name="fpass" placeholder="Enter Your Password">
	  </div>
	  </div>
	<div class="form-group">
      <label  class="control-label col-sm-4"for="dept">Dept:</label>
	  <div class="col-sm-4">
      <input type="text" class="form-control" name="fdept" placeholder="Enter your Dept">
	  </div>
	  </div>
	<div class="form-group">
      <label  class="control-label col-sm-4" for="email">Email:</label>
	  <div class="col-sm-4">
      <input type="text" class="form-control" name="fmail" placeholder="Enter your Email">
	  </div>
	  </div>
	  <div class="form-group">
      <label  class="control-label col-sm-4"for="contact">Mobile:</label>
	  <div class="col-sm-4">
      <input type="text" class="form-control" name="fmobile" placeholder="Enter your Mobile">
	  </div>
	  </div>
	  <div class="form-group">
      <label  class="control-label col-sm-4"for="faddress">Address:</label>
	  <div class="col-sm-4">
      <input type="text" class="form-control" name="faddress" placeholder="Enter your Address">
	  </div>
	  </div>
	  <div class="form-group">
	 <label  class="control-label col-sm-5"for="submit"></label>
	 <button type="submit" class="btn btn-default">Submit</button>
	 </div>
	 </form>
	 <center><h2>You Want to Login <h2></center>
	 <label  class="control-label col-md-5"for="cancel"></label>
	<a href="home.php"><button type="cancel" class="btn btn-default">Log in</button></a>	
	</div>
 </body>
</html>  