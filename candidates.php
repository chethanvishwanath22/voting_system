<?php
session_start();
$db_host= 'localhost';
$db_user= 'root';
$db_password= 'tiger';
$db_name='voting';

$section=$_SESSION['section'];
$dbc=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("error connecting to database");


$sql="select * from candidates where section=".$section;
$result=mysqli_query($dbc,$sql) or die ("not valid");


echo '<form id="myform" method="POST" action="vote.php">';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio" sid="sid" name="sname" value="'.$row['sname']. '">'. $row['sname']. '</input><br />';
}
echo '</form>';
?>
