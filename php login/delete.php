<html>
<head>
 <title>
   delete</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../php login/bootstrap.min.css">
</head>
<body style="background-color:rgb(128,128,128);color:white;">
   <div class="container-fluid" style="background-color:cyan;">
    <center> <h1 style="color:#0000FF; font-size:300%;">Delete Your Details</h1></center>
   </div><br>
   <div class="container">
   <form action="dele.php" method="POST" class="form-horizontal" role="form">
      <div class="form-group">
      <label class="control-label col-sm-4"  for="username">UserName:</label>
	  <div class="col-sm-4">
      <input type="txet" class="form-control" name="fname" placeholder=" Enter UserName">
    </div>
	</div>
	<div class="form-group"><br>
	<label class="control-label col-md-5" for="Delete"></label>
	<button type="Delete" class="btn btn-default">Delete</button>
	</div>
	</form>
	</div>
</body>
</html>