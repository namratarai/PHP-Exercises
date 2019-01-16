<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
function addNumbers($number1, $number2){
$sum = $number1 + $number2;
 
return $sum;
    
    
} 

$result = addNumbers(34,64);

echo $result;

echo "<br>";
    
$result = addNumbers(100, $result);

echo $result;

echo "<br>";
    
$result = addNumbers(10000, $result);


echo $result;
 //A function can return a value using the return statement in the form of value . return stops the execution of the function and sends the value back to the calling code.   
?>


</body>
</html>