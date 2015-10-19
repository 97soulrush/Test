<?php
  session_start();

  if (!empty($_POST)) {
    include('../includes/logs.php');
  }
?>

<!DOCTYPE HTML>
<html>
<head>
  <script>
    function switchLogInfo(logID, userID) {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("log-info").innerHTML=xmlhttp.responseText;
        }
      }
      xmlhttp.open("POST", "getLogInfo.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("log_id=" + logID + "&user_id=" + userID);
    }
  </script>
  <link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">

  <link rel='stylesheet' href='CSS/div-table.css' type='text/css'>
  <title>Logs</title>
</head>
<body>

  <?php
    include('../includes/header.php');
  ?>

  <div class='flex-container'>
  <div class='div-log' id='log-info'>
    <?php
      echo "
        <h2>Log</h2>
        <br>
        <p>This is of course where the full log information would be displayed.</p>
        <p>(Data)</p>
        <p>(Other star trek characters)</p>
        <p>(Lol, get it?)</p>";
    ?>
  </div>
  <!-- So so sorry... -->
  <div class='sorry'>
  </div>
  <div class='div-table'>
    <?php
      include('../includes/getlogs.php');
    ?>
  </div>
  </div>
 <?php
    include('../includes/footer.php');
  ?>

</body>
</html>
