<!DOCTYPE html>
<html>
<head>
<title>Herman</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">
</head>

<body>
		<?php
          include("../includes/sessionlog.php");
        ?>
<div class="w3-container w3-teal">
  <h1>Herman</h1>
</div>




<div class="w3-container">

<form class="w3-container w3-animate-left w3-card-4 w3-half val" style="margin-top: 50px; margin-bottom: 50px;" action="registered.php" method="post">
  <div class="w3-group w3-large"> 
    <input class="w3-input w3-text-theme" type="date" required>
    <label class="w3-label">Date</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input"type="text" name="lastname" id="lastname" required>
    <label class="w3-label">Last Name</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input" type="email" name="email" id="email" required>
    <label class="w3-label">Email</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input" type="password" name="pwd" id="pwd" placeholder ="Please choose a secure password" required>
    <label class="w3-label">Password</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input" type="password" required>
    <label class="w3-label">Confirm Password</label>
  </div>
  <label class="w3-checkbox">
  <input type="radio" value="1" name="usertype" id="usertype" checked>
  <div class="w3-checkmark"></div> Student
</label><br>
<label class="w3-checkbox">
  <input type="radio" value="2"  name="usertype" id="usertype">
  <div class="w3-checkmark"></div> Administrator
</label><br>
  <div class="w3-group w3-text-theme">
    <label class="w3-checkbox">
    <input type="checkbox" required>
    <div class="w3-checkmark"></div> I agree to Terms & Conditions
  </label>
  </div>
  <div class="w3-group">
  <input class="w3-btn w3-teal" type="submit"/>
  <label class="w3-label">Sign Up</label>
  </div>
</form>

</div>

<footer class="w3-container w3-margin-top w3-teal">
  <h5>Footer</h5>
  <p>Footer information goes here</p>
</footer>

</body>
</html> 