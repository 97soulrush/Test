<?php
  
  include('deleteUnconfirmed.php');
  include('sqlconnect.php');

  $stmt = $conn->prepare("SELECT DateJoined,Password,LastName,FirstName,ID FROM User WHERE Username=?");
  $stmt->bind_param('s', $username);

  $username = $_POST['email'];
  $inpass = $_POST['pwd'];

  $stmt->execute() or trigger_error($conn->error("[$stmt]"));
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_pass = hash('sha256', $row['DateJoined'] . $inpass . $row['LastName']);

    if ($row['Password'] == $hashed_pass) {
      $_SESSION['user_id'] = $row['ID'];

      echo "
        <h4>Welcome back, " . $row['FirstName'] . ' ' . $row['LastName'] . ".</h4>
        <a class='btn btn-success' href='index.php'>Main page</a>";
    } else {
      echo '<!DOCTYPE html>
<html>
<head>
<title>Welcome to Hermie</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">

</head>

<body>
<!-- I\'m putting the header and footer in a php file that you can insert easily into any page with the following code -->
<!-- If you want to edit them, they\'re found in ~/apps/teammoby/includes/header.php or footer.php -->
<?php
  include(\'../includes/header.php\');
?>      
<div class="container-fluid">
        <h1>Login</h1>
        <p>Incorrect username or password.</p>
        <form role="form" action="login.php" method="post">
          <div class="row">
            <div class="col-xs-4">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email" id="email" required />
            </div>
          </div>
          <br>
         <div class="row">
           <div class="col-xs-4">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control" name="pwd" id="pwd" required />
           </div>
         </div>
         <br>
         <div class="row">
           <div class="col-xs-4">
             <input type="submit" class="btn btn-default" value="Submit" />
           </div>
         </div>
       </form>
     </div>
<?php
  include(\'../includes/footer.php\');
?>

</body>
</html> 
';

    }
  } else {
    echo '<!DOCTYPE html>
<html>
<head>
<title>Welcome to Hermie</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">

</head>

<body>
<!-- I\'m putting the header and footer in a php file that you can insert easily into any page with the following code -->
<!-- If you want to edit them, they\'re found in ~/apps/teammoby/includes/header.php or footer.php -->
<?php
  include(\'../includes/header.php\');
?>      
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

  include(\'../includes/footer.php\');
?>

</body>
</html> 
';

  }
?>
