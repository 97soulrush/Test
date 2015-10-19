<?php
  $num = $id * 11 + 7;
  $strnum = (string) $num;
  mail($username, "Teammoby confirmation email", "Your confirmation code is: " . substr(md5($strnum . $username . $lastname), 0, 8));
?>
