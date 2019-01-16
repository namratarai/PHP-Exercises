<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<form id="form1" name="form1" method="post" action="registration_data.php" enctype="multipart/form-data">
  <label>Name
  <input type="text" name="name" />
  </label>
  
  <p>
    <label>Email
    
    <input type="email" name="email" />
    </label>
  </p>
  <p>
    <label>Mobile Number
    
    <input type="number" name="mobile" />
    </label>
  </p>
  <p>
    <label>Password
    <input type="password" name="password" />
    </label>
  </p>
  <p>
    <label>Address
    <textarea name="address"></textarea>
    </label>
  </p>
  <p>
  <label>Gender
   <input type = "radio" name = "gender" value = "female">Female
   <input type = "radio" name = "gender" value = "male">Male
   </label></p>
  <input type="file"name="image"> 
  
  <p> <input type = "submit" name = "submit" value = "REGISTER">
  &nbsp; 
  <input type = "reset" name = "reset" value = "RESET" />
  </p>
  <p>&nbsp;</p>
</form></div>
</body>
</html>
