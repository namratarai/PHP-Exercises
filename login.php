<?php 
require('db.php');
session_start();
extract($_POST);//The extract() function imports variables into the local symbol table from an array
if(isset($submit))
{

	if($email=="" || $password=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{


$sql=mysql_query("select * from registration where email='$email' and password='$password'") or die('Error:'.mysql_error());;

$r=mysql_num_rows($sql);

if($r==true)
{
//$_SESSION['user']=$email;
header('location: welcome.php');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="" style="background-color:#CCFFCC" >
<div class="col-sm-4"><?php echo @$err;?></div>
<label>Email</label>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
<input type="text" placeholder="enter email" name="email" /><br /><br />
<label>Password</label>
<input type="password" placeholder="enter password" name="password" /><br /><br />
<a href="forget.php">Reset password</a>
<input type="submit" value="LOGIN" name="submit" />
&nbsp;
</form>
</body>
</html>
