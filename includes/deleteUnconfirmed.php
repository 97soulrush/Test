<?php
  include("../includes/sqlconnect.php");

  $sql = "DELETE FROM User WHERE Confirmed = 0 AND NOW() > ADDTIME(DateJoined, '00:10:00')";
  $conn->query($sql);

  $conn->close();
?>
