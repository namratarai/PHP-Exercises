<?php

$num = 121;
$p=$num;
$r = 0;
while ($num != 0)
{
$r = $r * 10 + $num % 10;
//below cast is essential to round remainder towards zero
$num = (int)($num / 10); 
}
 
if($r==$p)
{
echo $p," is Palindrome number";
}
else
{
echo $p." is not Palindrome number";
}

?>