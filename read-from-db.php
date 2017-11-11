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
        echo "<p> <strong>Username:</strong> " . $row["username"]. " <strong>Score:</strong>" . $row["score"]. "<strong>Level:</strong>" . $row["level"]. "</p>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!-- <p>Nascetur eu nibh vestibulum amet gravida nascetur praesent</p> -->