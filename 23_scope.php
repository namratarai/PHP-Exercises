<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

$x = "outside"; // global

function convert() {
global $x;
    //super variable
$x = "inside"; // local variable

}


echo $x;

echo "<br>";



echo $x;

echo $x;

    
    
?>

</body>
</html>