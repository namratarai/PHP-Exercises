<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
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

    <title>login form</title>

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
    <div class="jumbotron mx-5" style="background-color: rgba(0,0,0,0.7);margin-top: 100px">
        <h1 class="d-flex justify-content-center text-light"><b>LOGIN PAGE</b></h1>
        <form style="text-align: center;color: white" name="regform" action="" onSubmit="return dolly()" method="post">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
		<b> Email:</b>
            <br>
            <input type="text" name="e" class="fo"><br><br><b>Password:</b>
            <br>
            <input type="text" name="p" class="fo"><br><br>
            <input type="submit" name="save" value="Login" class="btn btn-danger btn-lg">
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