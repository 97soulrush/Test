<?php
  if ($_POST) {
    include("sqlconnect.php");

    $stmt = $conn->prepare("INSERT INTO User (Username, Password, FirstName, LastName, UserTypeID) VALUES (?, ?, ?, ?, ?)");
    $stmt-bind_param("ssssi", $username, $password, $firstname, $lastname, $usertype);

    $username = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    if ($_POST["usertype"] == "Volunteer") {
      $usertype = 1;
    } else {
      $usertype = 2;
    }

    $stmt->execute();

    $conn->close();
  }
?>
