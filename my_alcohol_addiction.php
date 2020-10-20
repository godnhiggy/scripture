<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$avgDistance = $_POST["avgDistance"];
$groups = $_POST["groups"];
//echo $q1;
//echo " ";
//echo $q2;
//echo " ";
//echo $q3;
//echo " ";
//echo $q4;
//echo " ";
//echo $q5;
//echo " ";
//echo $avgDistance;
//echo " ";
//echo $groups;




$servername = "localhost";
$username = "bjekqemy_higgy";
$password = "Brett73085";
$dbname = "Rubric";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  echo "dead";
}
//echo "alive";
// prepare and bind





$stmt = $conn->prepare("INSERT INTO scoring (q1, q2, q3, q4, q5, avgD, gr) VALUES (?, ?, ?, ?, ?, ?, ?)");
//echo "still alive";
$stmt->bind_param("iiiiiis", $q1, $q2, $q3, $q4, $q5, $avgDistance, $groups);
//echo "still still alive";
$stmt->execute();

//echo "<br>New records created successfully";
?>
<html>
<meta http-equiv="refresh" content="0;
url='my_intense_alcohol_addiction.php'" />






