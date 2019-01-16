<!Doctype html>
<html>
<head>
</head>
<body>

<form action="" method="post">
Enter a number:
<input type="text" name="number" />
<input type="submit" name="submit" value="Table" />
</form>

<?php

 if(isset($_POST['submit']))
 {
     
     $num=$_POST['number'];
 
 echo "Table of $num: <br>";
 
 
 for($i=1;$i<=10;$i++)
 { 
 $value=$num*$i; 
 
 echo "$num*$i=$value<br>";
 }
 }

 


?>


</body>
</html>