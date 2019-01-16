<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$list = [343,34,323,23,54,232,453];

echo max($list);

echo "<br>";
    
echo min($list);


echo "<br>";

sort($list);
    
print_r($list);
//The print_r() function is a built-in function in PHP and is used to print or display information stored in a variable.

?>

</body>
</html>