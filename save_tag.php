<?php 
$tag = $_POST["tag"];

$con=mysqli_connect("localhost","root","","Dolphi");
	
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$queryS = mysqli_query($con,"SELECT * FROM Tags WHERE tag = '$tag'");
$numRows = mysqli_num_rows($queryS);
echo "numRows: ".numRows;
printf("Result set has %d rows,\n",$numRows);

if($numRows<=0)
	mysqli_query($con,"INSERT INTO Tags(tag) VALUES('$tag')");

mysqli_close($con);
//$gohere = "http://localhost/Dolphi/Home.html";

//header("Location: $gohere");

?>