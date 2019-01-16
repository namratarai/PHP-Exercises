<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 
   <link rel="stylesheet" type="text/css" href="../DataTables-1.10.18/css/jquery.dataTables.css"/>
<script type="text/javascript" src="../DataTables-1.10.18/js/jquery.dataTables.js"></script>
 <script>
$(document).ready(function() {
    $('#example').DataTable({
        
    });
});
</script>


</head>
<body>
<div class="container">

<!--<input type="text" name="text"><input type="button"name="button"value="search">	-->
<div class="table-responsive">
  <table class="table table-striped table-bordered display table-hover"  id="example">
	<thead>
        <td>id</td>	
		<td>name</td>
		<td>email</td>
		<td>password</td>
		
		<td>gender</td>
		<td>city</td>
		<td>address</td>
		<td>Delete</td>
		<td>Edit</td>
	</thead>
<tbody>
<?php
include('db.php');
 $q="select * from registration";

$qry=mysql_query($q);

while($r=mysql_fetch_array($qry))
{
?>
<tr>
<td><?php echo $r['id']; ?></td>	
<td><?php echo $r['name']; ?></td>
<td><?php echo $r['email'];?></td>
<td><?php echo $r['password'];?></td></td>
<td><?php echo $r['mobile'];?></td></td>
<td><?php echo $r['gender'];?></td></td>

<td><?php echo $r['address'];?></td></td>

 <td><img src="img/<?php echo $r['image'];?>" height="100px" width="100px"></td>
<td><a href="delete.php?id=<?php echo $r['id'];?>">Delete</a></td>
<td><a href="edit.php?id=<?php echo $r['id'];?>">Edit</a></td>


</tr>

<?php
}
?>
</tbody>
</table>


  </div>  

</div>


</body>
</html>
