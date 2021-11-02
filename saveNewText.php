<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "ercresp@2021";
$dbname = "mydatabase";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$newText=$_POST['newText'];
if ($newText != "")
{
 $sql = " UPDATE mytable SET div1 = '".$newText. "' WHERE id = 1 ";
  $result = mysqli_query($con, $sql);
}
?>