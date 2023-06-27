<html>
<body>
<style>
  table, td, th {
    border: 1px solid black;
    width: 33%;
    text-align: center;
    border-collapse: collapse;
    background-color: lightblue;
  }

  table {
    margin: auto;
  }
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weblab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM can";
$result = $conn->query($sql);
echo "<center><h3>HARSHARAJ B - 4JK20IS019</h3></center>";
echo "<br>";
echo "<center>BEFORE SORTING</center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["usn"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["address"] . "</td></tr>";
  }
} else {
  echo "Table is Empty";
}

echo "</table>";

$sql = "SELECT * FROM can ORDER BY usn";
$result = $conn->query($sql);

echo "<br>";
echo "<center>AFTER SORTING</center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["usn"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["address"] . "</td></tr>";
  }
} else {
  echo "Table is Empty";
}

$conn->close();
?>
</body>
</html>