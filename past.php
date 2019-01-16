<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
   <?php

    include('db.php');
    

        
        
        
       $insert=mysql_query("insert into registration (id,name,email,time,gender,classes) values ('6','ggg','shs','shs','shs','sbs')") ;
    
        if (!$insert)
        {
            echo "fail";
        }
        
    
    ?>
    
</body>
</html>