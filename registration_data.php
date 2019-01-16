<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<?php 
session_start();   
include ('db.php');
if(isset($_POST['submit']))
{
 $a=$_POST['name'];
 $b=$_POST['email'];
 $c=($_POST['password']);
 $d=$_POST['mobile'];
 $e=$_POST['gender'];
 $f=$_POST['address'];
 
$i=$_FILES['image']['name'];
$filePath = "img/" . $i;
move_uploaded_file($_FILES['image']['tmp_name'],$filePath);


 $insert=mysql_query("insert into registration(name, email, password, mobile, gender, address, image) values('$a','$b','$c','$d','$e','$f','$i')");
if(!$insert)
{echo "fail";}


}
?>

<form method="POST" action="login.php">
<input type="submit" name="submit" value="Logout">
</form>


<ul>
 <li class="list-group-item list-group-item-secondary"><?php echo "NAME: $a";?></li>
 <li class="list-group-item list-group-item-secondary"><?php echo "EMAIL: $b";?></li>
 <li class="list-group-item list-group-item-secondary"><?php echo "PASSWORD: $c";?></li>
 <li class="list-group-item list-group-item-secondary"><?php echo "PHONE NO.: $d";?></li>
 <li class="list-group-item list-group-item-secondary"><?php echo "GENDER: $e";?></li>
 
 <li class="list-group-item list-group-item-secondary"><?php echo "ADDRESS: $f";?></li>
    <li class="list-group-item list-group-item-secondary"><img src="img/<?php echo $i;?>" height="200px" width="200px"></li>
</ul>

</div>
</body>

</html>
