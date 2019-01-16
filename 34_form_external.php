<?php
if(isset($_POST["submit"])
  )
{echo $_POST["username"];?>
 <br>
     your password is:<?php echo $_POST["password"];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="34_form_external.php" method="post">
    
<input type="text" name="username" placeholder="Enter Username">
<input type="password"  name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
    
    
</form>



</body>
</html>