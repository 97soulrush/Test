<?php
  // What's your number? I need to call you and explain how this works.

  if (!empty($_SESSION['user_id'])) {
    $accountBtns = '
      <a href="index.php?logout=true">Logout</a>';
  } else {
    $accountBtns = '
      <a href="login.php">Log In</a>
      <a href="signup.php">Sign Up</a>';
  }

  echo '
    <div class="w3-container w3-teal">
      <img src="header.png" width="20%"/>
    </div>
    <div class="w3-container w3-theme-d1">
    </div>

    <nav class="w3-topnav w3-theme-d1">
      <a href="index.php">Home</a>'
      . $accountBtns . '
      <a href="logs.php">My Logs</a>
      <a href="input.php">Add a Log</a>
      <a href="inputlog.php">About Team Moby</a>
    </nav>';
?>
