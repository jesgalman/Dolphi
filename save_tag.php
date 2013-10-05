
<?php 
$tag = $_POST["tag"];


$con=mysqli_connect("localhost","root","root","hack");
	

// Check connection
if (mysqli_connect_errno())
  {


  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"INSERT INTO tags(tag) VALUES('$tag')");



mysqli_close($con);
 $gohere = "http://localhost:8888/Dolphi/Home.html";

$doc = new DOMDocument();
$doc->loadHTMLFile($gohere);
echo $doc->saveHTML();


?>