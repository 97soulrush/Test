<?php
  include('sqlconnect.php');

  $sql = 'SELECT * FROM Institution';
  $result = $conn->query($sql);

  $institutions = "";

  while ($row = $result->fetch_assoc()) {
    $institutions .= "
      <option value='" . $row['ID'] . "'>" . $row['Name'] . "</option>";
  }
  
  echo $institutions;
?>
