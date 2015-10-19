<?php
  include('sqlconnect.php');

  $stmt = $conn->prepare('INSERT INTO Logs (UserID,InstitutionID,Hours,Notes,Date) VALUES (?,?,?,?,?)');
  $stmt->bind_param('iiiss', $userID, $institutionID, $hours, $notes, $datePlusPlus);

  $userID = $_SESSION['user_id'];
  $institutionID = $_POST['institution'];
  $hours = $_POST['hours'];
  $notes = $_POST['notes'];
  $date = $_POST['date'];

  $year = (int) substr($date, 0, 3);
  $month = (int) substr($date, 5, 7);
  $day = (int) substr($date, 9, 11);
  $datePlusPlus = date('F d\, Y');

  $stmt->execute() or trigger_error($conn->error);
?>
