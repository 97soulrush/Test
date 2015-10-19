<?php
  session_start();

  if (!empty($_GET['logout'])) {
    session_destroy();

    header("Refresh:0; url=index.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to Hermie</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">

</head>

<body>
<!-- I'm putting the header and footer in a php file that you can insert easily into any page with the following code -->
<!-- If you want to edit them, they're found in ~/apps/teammoby/includes/header.php or footer.php -->
<?php
  include('../includes/header.php');
?>

<div class="w3-container w3-center">

<img src="visual.PNG" width="50%"/>
</div>
<br/>
<div class="w3-container w3-center sign-up-button"">
<b><a href="signup.php" class="w3-text-theme" style="text-decoration:none; background:white; color:white; padding:15px; border-radius:25px; border: 2px solid teal; text-align:center">Sign Me Up!</a></b>
</div>
<br/>
</div>

<?php
  include('../includes/footer.php');
?>

</body>
</html> 
