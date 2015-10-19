<?php
  include("sqlconnect.php");

  $stmt = $conn->prepare("SELECT ID,LastName FROM User WHERE Username = ?");
  $stmt->bind_param("s", $email);

  $email = $_REQUEST["email"];
  $key = $_REQUEST["key"];

  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $lastname = $row["LastName"];
    $num = ($row["ID"] * 11 + 7);
    $strnum = (string) $num;

    if (substr(md5($strnum . $email . $lastname), 0, 8) == $key) {
      echo "<h3>Email confirmed!</h3><p>You're account is fully set up!<br>Click the button below to return to the main page.</p> <a class='btn btn-success' href='index.php'>Main page</a>";

      $stmt = $conn->prepare("UPDATE User SET Confirmed=1 WHERE Username = ?");
      $stmt->bind_param("s", $email);

      $email = $_REQUEST["email"];
      $stmt->execute();

    } else {
      echo "<p>A confirmation code was sent to " . $email . ".</p><br><p>Enter the code to confirm your email address.</p>";
      echo "<input type='text' name='key' id='key'/><button type='button' onclick='validate()'>Submit</button><br><p>incorrect confirmation code</p>";
    }
  } else {
    echo "<p>A confirmation code was sent to " . $email . ".</p><br><p>Enter the code to confirm your email address.</p>";
    echo "<input type='text' name='key' id='key'/><button type='button' onclick='validate()'>Submit</button><br><p>incorrect confirmation code + num_row</p>";
  }
?>
