<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Register</title>
<style type="text/css">
	li a{
	color:#ffeecc;hover:none;
}
.navbar-fixed-top .navbar-brand:hover, .navbar-fixed-top .navbar-brand:focus {
  background-color: transparent;
  color: #999999;
}
.header
{
background: #1f4b59;
}
</style>

</head>
<body>

<nav role="navigation "class="navbar navbar-fixed-top" style="background-color:#1f4b59;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html" style = "color:white">Hermie</a>
      </div>
      <div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="page1.php">Page 1</a></li>
          <li><a href="page2.php">Page 2</a></li>
          <li><a href="page3.php">Page 3</a></li>
        </ul> 
      </div>
      <div class=""> 
        <?php
          include("../includes/sessionlog.php");
        ?>
    </div>
  </nav>
<br/>
<br/>


<br/>

  <div class="container-fluid">
<h1 style = "text-align:center">Register</h1>
<p style = "text-align:center">
Create an account to start logging your service hours with Hermie!</p>
<hr/>
  <form role="form" class = "form-horizontal" action="registered.php" method="post">
    <div class="form-group">
      <div class="col-xs-1 col-xs-offset-3">
        <label for="firstname">First name:</label></div>
	<div class="col-xs-5">
        <input type="text" class="form-control" name="firstname" id="firstname" required>
      </div>
	</div>


        <div class="form-group">
      <div class="col-xs-1 col-xs-offset-3">
        <label for="lastname">Last name:</label></div>
	<div class = "col-xs-5">
        <input type="text" class="form-control" name="lastname" id="lastname" required>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-xs-1 col-xs-offset-3">
        <label for="email">Email address:</label></div>
	<div class = "col-xs-5">
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-xs-1 col-xs-offset-3">
        <label for="pwd">Password:</label></div>
<div class = "col-xs-5">
        <input type="password" class="form-control" name="pwd" id="pwd" placeholder = "Please choose a secure password" required>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-xs-1 col-xs-offset-3">
        <label for="usertype">User type:</label></div>
<div class = "col-xs-5">
        <select class="form-control" name="usertype" id="usertype">
          <option value="1">Volunteer</option>
          <option value="2">Administrator</option>
        </select>
      </div>
    </div>
   
    <div>
<div class = "col-xs-4 col-xs-offset-6">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form>
  </div>
</body>
</html>
