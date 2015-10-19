<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Herman</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">
<style>
.footer-nav li
{
display:inline;
padding:5px;
}
.footer-nav li a
{
 text-decoration:none;
}
.footer-nav li a:hover
{
 text-decoration: underline;
}
</style>

</head>

<body>

<div class="w3-container w3-teal">
  <img src="header.png" width="20%"/>

</div>
<nav class="w3-topnav w3-theme-d1">
  <a href="index.php">Home</a>		
  <a href="login.php">Log In</a>		
  <a href="signup.php">Sign Up</a>		
  <a href="logs.php">My Logs</a>
  <a href="input.php">Add a Log</a>		
  <a href="#">About Team Moby</a>		
</nav>

<?php
if(!empty($_POST)) {
include("../includes/login.php");
} else {
echo '

<div class="w3-container">
<form role="form" action="login.php" method="post" class="w3-card-4 w3-half" style="padding-left:10px">
  <div class="w3-group"> 
    <input class="w3-input" type="email text" name="email" id="email" required>
    <label for="email" class="w3-label">Email</label>
  </div>
  <div class="w3-group"> 
    <input class="w3-input"type="password"  name="pwd" id="pwd" required>
    <label class="w3-label">Password</label>
  </div>
      <label class="w3-checkbox">
    <input type="checkbox">
    <div class="w3-checkmark"></div> Keep me logged in
  </label>
  
  <div class="w3-group">
  <input type="submit" class="w3-btn w3-teal" value="Submit"/>
  <label class="w3-label">Log In</label>
  </div>
</form>
</div>
';
	}
?>

<footer class="w3-container w3-margin-top w3-teal">
 <ul class="footer-nav" style="list-style-type:none; text-align:center">
<li><a href="#">Home</a></li>
<li>|</li>
<li><a href="#">Sign In</a></li>
<li>|</li>
<li><a href="#">Register</a></li>
<li>|</li>
<li><a href="#">View My Logs</a></li>
<li>|</li>
<li><a href="#">Add a Log</a></li>
<li>|</li>
<li><a href="#">About Us</a></li>

</ul>
  <p style="text-align:center">-Team Moby 2015-</p>

</footer>

</body>
</html>