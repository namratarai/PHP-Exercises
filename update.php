<?php
 include('db.php');
if(isset($_POST["submit"]))
{
 	$id=$_POST["id"];
 $a=$_POST["name"];
$b=$_POST["email"];
  $c=$_POST["password"];
  $d=$_POST["qualification"];
  $e=$_POST["city"];
  $f=$_POST["address"];   
     $update=mysql_query("update  registration set name='$a',email='$b',pass='$c',qualification='$d',city='$e',address='$f' where id='$id'") or die(mysql_error($con));

  if($update){

  	header("location:fetch_data_select.php");
  } 
}
?>