<?php
  include('sqlconnect.php');

  $sql = "SELECT * FROM Changelog";
  $result = $conn->query($sql);

  $table_data = '';
  while ($row = $result->fetch_assoc()) {
    $table_data .= "
      <tr>
        <td>" . $row['Time'] . "</td>
        <td>" . $row['Description'] . "</td>
        <td>" . $row['Laborer'] . "</td>
      </tr>";
  }

  echo $table_data;
?>
