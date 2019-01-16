<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>regestration form</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            background-image: url(gegister.jpeg);
        }

        .fo {
            width: 300px;
            height: 30px;
        }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-md  fixed-top" style="font-family: sans-serif;background-color: rgba(0,0,0,0.7)">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">

                    <a class="nav-link text-light" href="index.php"><b>HOME </b></a>
                </li>





                <li class="nav-item active ml-3" style="border-left: 2px solid white">
                    <a class="nav-link text-light" href="proj2.php"><b>ABOUT</b></a>
                </li>

                <li class="nav-item active ml-3" style="border-left: 2px solid white">
                    <a class="nav-link text-light" href="contactus.php"><b>CONTACT</b></a>
                </li>
            </ul>
			<img src="../images/logo (2).png" height="50" width="50">
            <h1 class="text-light"><b>NOTICEBOARD</b></h1>


        </div>
    </nav>
    <div class="jumbotron mx-5" style="background-color: rgba(0,0,0,0.7);margin-top:100px">
        <h1 class="d-flex justify-content-center text-light"><b>REGISTRATION FORM</b></h1>
        <form method="post" enctype="multipart/form-data" style="margin-left:30%">
			<table class="table table-responsive">
	<Tr>
		<Td colspan="4"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td><font color="#FFFFFF">Enter Your name</font></td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td><font color="#FFFFFF">Enter Your email</font> </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td><font color="#FFFFFF">Enter Your Password </font></td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				<tr>
					<td><font color="#FFFFFF">Enter Your Mobile</font> </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td><font color="#FFFFFF">Select Your Gender</font></td>
					<Td>
				<font color="#FFFFFF">Male</font><input type="radio" name="gen" value="m" required/>
				<font color="#FFFFFF">Female</font><input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td><font color="#FFFFFF">Choose Your hobbies</font></td>
					<Td>
					<font color="#FFFFFF">Reading</font><input value="reading" type="checkbox" name="hob[]"/>
					<font color="#FFFFFF">Singing</font><input value="singin" type="checkbox" name="hob[]"/>
					
					<font color="#FFFFFF">Playing</font><input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td><font color="#FFFFFF">Upload  Your Image</font> </td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				
				<tr>
					<td><font color="#FFFFFF">Enter Your DOB</font></td>
					<Td>
					<select name="yy" required>
					<option value=""><font color="#FFFFFF">Year</font></option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value=""><font color="#FFFFFF">Month</font></option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value=""><font color="#FFFFFF">Date</font></option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="4" align="center">
<input type="submit" class="btn btn-danger" value="Save" name="save"/>
<input type="reset" class="btn btn-danger" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
    </div>








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
