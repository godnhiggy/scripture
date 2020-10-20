<!DOCTYPE=html>
<html>
<body style="background-image:repeating-linear-gradient(green, gold, green)";>
<center>
<title> Grading Rubric </title>
<p style="color:black; font-family:Comic; font-size:50";>
<?php

$servername = "localhost";
$username = "bjekqemy_higgy";
$password = "Brett73085";
$dbname = "Rubric";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
 if ($conn->connect_error) {
  echo "dead";
  }
// echo "connection success";


for ($gr = 1; $gr <= 10; $gr++) {
  



  $sql = "SELECT AVG(q1) AS aq1 FROM scoring WHERE gr =?";


$stmt = $conn -> prepare($sql);
$stmt -> bind_param ("i", $gr); 
$stmt -> execute();
$result = $stmt -> get_result();
while($row = $result ->fetch_assoc()){
$aq1 = $row['aq1'];
echo "Group: ".$gr;
echo "<br>";
echo "THIS IS OUR AVERAGE Q1: ".$row['aq1'];
echo "<br>";
}


  
$sql = "SELECT AVG(q2) AS aq2 FROM scoring WHERE gr =?";


$stmt = $conn -> prepare($sql);
$stmt -> bind_param ("i", $gr); 
$stmt -> execute();
$result = $stmt -> get_result();
while($row = $result ->fetch_assoc()){
$aq2 = $row['aq2'];
echo "THIS IS OUR AVERAGE Q2: ".$row['aq2'];
echo "<br>";}

$sql = "SELECT AVG(q3) AS aq3 FROM scoring WHERE gr =?";


$stmt = $conn -> prepare($sql);
$stmt -> bind_param ("i", $gr); 
$stmt -> execute();
$result = $stmt -> get_result();
while($row = $result ->fetch_assoc()){
$aq3 = $row['aq3'];
echo "THIS IS OUR AVERAGE Q3: ".$row['aq3'];
echo "<br>";}

$sql = "SELECT AVG(q4) AS aq4 FROM scoring WHERE gr =?";


$stmt = $conn -> prepare($sql);
$stmt -> bind_param ("i", $gr); 
$stmt -> execute();
$result = $stmt -> get_result();
while($row = $result ->fetch_assoc()){
$aq4 = $row['aq4'];
echo "THIS IS OUR AVERAGE Q4: ".$row['aq4'];
echo "<br>";}

$sql = "SELECT AVG(q5) AS aq5 FROM scoring WHERE gr =?";


$stmt = $conn -> prepare($sql);
$stmt -> bind_param ("i", $gr); 
$stmt -> execute();
$result = $stmt -> get_result();
while($row = $result ->fetch_assoc()){
$aq5 = $row['aq5'];
echo "THIS IS OUR AVERAGE Q5: ".$row['aq5'];
echo "<br>";}

$sql = "SELECT AVG(avgD) AS avgd FROM scoring WHERE gr =?";


$stmt = $conn -> prepare($sql);
$stmt -> bind_param ("i", $gr); 
$stmt -> execute();
$result = $stmt -> get_result();
while($row = $result ->fetch_assoc()){

echo "THIS IS OUR AVERAGE Distance: ".$row['avgd'];
echo "<br>";}

$rGrade = ($aq1 +$aq2 +$aq3 +$aq4 +$aq5)*5

}



$url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 10; URL=$url1");

?>
</p>
</center>
</body>
</html>
