<?php
$dbservername = "score-db.mysql.database.azure.com";
$dbusername = "petrosxen@score-db";
$dbpassword = "Qwerty1234";
$dbname = "scores";

//$username = $_POST["username"];
//$score = $_POST["score"];

$username=isset($_GET['username'])?$_GET['username']:"";
$score=isset($_GET['score'])?$_GET['score']:"";
$level=isset($_GET['level'])?$_GET['level']:"";
 
echo  "Username of user is: ".$username."\n";
echo  "Score is: ".$score."\n";
echo  "Level is:".$level."\n";


// Connect to database
$connection = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

$query = "INSERT INTO scores (username, score,level)
VALUES ('". $username ."', ". $score .",". $level.")";

if ($connection->query($query) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
?>
