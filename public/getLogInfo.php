<?php
  include('../includes/sqlconnect.php');

  if ($stmt = $conn->prepare("SELECT CONCAT(u.FirstName, ' ', u.LastName) as FullName,i.Name as InstitutionName,Date,Hours,Notes FROM Logs l inner join User u on l.UserID=u.ID inner join Institution i on l.InstitutionID=i.ID WHERE l.ID=? AND l.UserID=?")) {
  $stmt->bind_param('ii', $logID, $userID);

  $logID = $_POST['log_id'];
  $userID = $_POST['user_id'];

  $stmt->execute();

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  echo "
    <h3>User: " . $row['FullName'] . "</h3>
    <h3>Institution: " . $row['InstitutionName'] . "</h3>
    <h3>Date: " . $row['Date'] . "</h3>
    <h3>Hours: " . $row['Hours'] . "</h3>
    <h3>Notes:</h3>
    <p>" . $row['Notes'] . "</p>";
  } else {
    echo $conn->error;
  }
?>
