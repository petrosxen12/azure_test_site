<?php

$screenname=isset($_GET['username'])?$_GET['username']:"";
$scoreOfUser=isset($_GET['score'])?$_GET['score']:"";
 
echo  "Username of user is: ".$screenname."\n";
echo  "Score is: ".$scoreOfUser;
 
?>
