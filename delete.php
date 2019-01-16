<?php
include("db.php");
$a=$_GET["id"];
$query=mysql_query("DELETE FROM registration WHERE id='$a'");


if($query)
{
    header("location: fetch_data_select.php");
    
}


?>