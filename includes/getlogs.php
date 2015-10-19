<?php
  include('sqlconnect.php');

  $sql = "select CONCAT(u.FirstName, ' ', u.LastName) as FullName, l.Hours, l.Notes, l.Date, l.Confirmed, l.ID as LogID, i.Name as Institution from Logs l inner join User u on l.UserID = u.ID inner join Institution i on l.InstitutionID = i.ID where u.ID=".$_SESSION['user_id'].";";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $logs = "";

    while ($log = $result->fetch_assoc()) {
      // I'm so sorry
      $logs .= "
	<!-- You don't need to add the stylesheet here -->
        <!-- Remind me and I'll explain fully how it works -->
        <!-- But basically this html replaces the <?php ?> tags inside the div-table classed div in public/logs.php -->

        <div class='w3-table' onclick='" . 'switchLogInfo("' . $log['LogID'] . '", "' . $_SESSION['user_id'] . '"' . ")'>
          <div class='div-table-col'>" . $log['FullName'] . "</div>
          <div class='div-table-col'>" . $log['Institution'] . "</div>
          <div class='div-table-col'>" . $log['Date'] . "</div>
          <div class='div-table-col'>" . $log['Hours'] . "</div>
        </div>";
    }

    echo $logs;
  } else {
    echo '<h3>No logs</h3>';
  }
?>
