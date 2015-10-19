<?php
$servername = "localhost";
$username = "8e2e16b7c2e0";
$password = "95fafbe087d6d6b9";
$dbname = "teammoby";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//SQL Commands
$sql = "SELECT * FROM User";
$result = $conn->query($sql);

// Output each row's data
if ($result->num_rows > 0) {
    $tableData = '
      <div class="container">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Username</th>
              <th>Password</th>
              <th>UserTypeID</th>
              <th>Date joined</th>
              <th>Confirmed</th>
            </tr>
          </thead>
          <tbody>';
    while($row = $result->fetch_assoc()) {
        $tableData .= "<tr><td>" . $row["ID"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["Username"]. "</td><td>" . $row["Password"]. "</td><td>" . $row["UserTypeID"] . "</td><td>" . $row["DateJoined"] . "</td><td>" . $row["Confirmed"] . "</td></tr>";
    }
    echo $tableData . "</tbody></table></div>";
} else {
    echo "0 Results";
}

$conn->close();
?>
