<?php
  if(isset($_SESSION['user_id'])) {
    include('sqlconnect.php');
    $sql = "SELECT ID,FirstName,LastName FROM User WHERE ID=" . $_SESSION['user_id'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];

    echo "<ul class='nav navbar-nav navbar-right'><li><a href='$dir'>Your name is $FirstName $LastName.</li><span class='glyphicon glyphicon-log-out'></span>Logout</a></li></ul>";
  } else {
    echo '
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Register Now</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>';
  }
?>
