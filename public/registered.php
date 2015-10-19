<html>
<head>
  <script>
    function validate() {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("confirmDiv").innerHTML=xmlhttp.responseText;
        }
      }
      xmlhttp.open("POST", "ajax_validate.php", true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("email="+document.getElementById("email").value+"&key="+document.getElementById("key").value);
    }
  </script>
  <!-- <meta http-equiv="refresh" content="5;url=index.php" /> -->
  <title>
    <?php
      if (isset($_POST)) {
        echo "Thanks for registering!";
      }
    ?>
  </title>
</head>
<body>
<?php
  if (isset($_POST)) {
    include("../includes/deleteUnconfirmed.php");
    include("../includes/sqlconnect.php");

    $stmt = $conn->prepare("INSERT INTO User (Username, Password, FirstName, LastName, UserTypeID) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $username, $password, $firstname, $lastname, $usertype);

    $username = $_POST["email"];
    $password = ' ';
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $usertype = (int) $_POST["usertype"];

    $stmt->execute();

    $id = $conn->insert_id;
    $sql = 'SELECT Password,LastName,DateJoined FROM User WHERE ID = ' . $id;
    $result = $conn->query($sql) or trigger_error($conn->error."[$sql]");
    $row = $result->fetch_assoc();
    $password = hash('sha256', $row["DateJoined"] . $_POST["pwd"] . $row["LastName"]);
    $sql = "UPDATE User SET Password='" . $password . "' WHERE ID=" . $id;
    $conn->query($sql);

    include("../includes/mail.php");

    echo "<h1>Thanks for registering!</h1>";
    echo "<div id='confirmDiv'><p>A confirmation code was sent to " . $username . ".</p><br>";
    echo "<p>Enter the code to confirm your email address.</p>";
    echo "<input type='text' name='key' id='key'/><button type='button' onclick='validate();'>Submit</button></div>";
    echo "<input type='hidden' id='email' value='" . $username . "' />";

    $stmt->close();
    $conn->close();
  } else {
    echo "<h1>Oops!</h1>";
    echo "<p>This page doesn't exist!<br>You should be redirected in a few seconds.</p>";
  }
?>
</body>
</html>
