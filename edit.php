<?php
include('db.php');

$a=$_GET['id'];
$q=mysql_query("select * from registration where id='$a'");
$r=mysql_fetch_array($q);

if(isset($_POST['submit']))
{
	$a=$_POST["name"];
 $b=$_POST["email"];
  $c=$_POST["password"];
  $d=$_POST["qualification"];
 $e=$_POST["gender"];
  $f=$_POST["city"];
  $g=$_POST["address"];
  $query=mysql_query("UPDATE from registration where id=$id");

	header("location: update.php");

}
	
?>

<form method="POST" action="update.php">
	<div>
		<input type="hidden" name="id" value="<?php echo $r['id']; ?>">
	Name
				<input type="text" placeholder="Name"name="name" value="<?php echo $r['name']; ?>">
			</div>

			<div>
				Email
				<input type="text" placeholder="abc@xyz" name="email" value="<?php echo $r['email']; ?>">
			</div>

			<div>
				Password
				<input type="Password" placeholder="Password" name="password" value="<?php echo $r['pass']; ?>">
			</div>

			<div>
				Qualification
				<input type="text" placeholder="Qualification" name="qualification" value="<?php echo $r['qualification']; ?>">
			</div>
				
            <div>
				<td>
					City
				</td>
				<select name="city" value="<?php echo $r['city']; ?>">
					<option>Delhi</option>
					<option>Noida</option>
					<option>Jaipur</option>
					<option>Punjab</option>
					<option>Patna</option>
					<option>Ranchi</option>
					<option>Shimla</option>
				
				</select>
				
			</div>
			<br>	    

			<div>
				Address
				<input type="text" placeholder="Address" name="address" value="<?php echo $r['address']; ?>">
			</div>
			
			<br>
            
<div>
		    <input type="submit" name="submit" value="Update">

		</div>
		    </form>
