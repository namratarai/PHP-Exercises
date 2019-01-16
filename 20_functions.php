<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>
<br>

<?php
function familyName($fname) {
    echo "$fname .<br>";
}
//with arguments
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>


</body>
</html>