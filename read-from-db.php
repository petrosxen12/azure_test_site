<?php
$servername = "score-db.mysql.database.azure.com";
$username = "petrosxen@score-db";
$password = "Qwerty1234";
$dbname = "scores";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM scores ORDER BY score desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"]. " Score:" . $row["score"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
