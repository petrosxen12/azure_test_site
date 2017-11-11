<?php
$dbservername = "score-db.mysql.database.azure.com";
$dbusername = "petrosxen@score-db";
$dbpassword = "Qwerty1234";
$dbname = "scores";

//$username = $_POST["username"];
//$score = $_POST["score"];
$screenname=isset($_GET['username'])?$_GET['username']:"";
$scoreOfUser=isset($_GET['score'])?$_GET['score']:"";
 
echo  "Username of user is: ".$screenname."\n";
echo  "Score is: ".$scoreOfUser;

// Connect to database
$connection = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

$query = "INSERT INTO scores (username, score)
VALUES ('". $screenname ."', ". $scoreOfUser .")";

if ($connection->query($query) === TRUE) {
    echo "New record created successfullyy";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
?>
