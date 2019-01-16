<?php
for($row=1;$row<=5;$row++)
{
echo"* </br>";
}
?>


<?php

for ($row = 1; $row <= 5; $row++)
{
 for ($col = 1; $col <= 5; $col++)
  {
   echo '* ';
  }
   echo "</br>";
}

?>




<?php

for($i=0;$i<=5;$i++)
{
for($j=0;$j<=$i;$j++)
{
echo "* ";
}
echo "<br>";
}

?>



<?php

for($i=0;$i<=5;$i++)
{
for($j=5-$i;$j>=1;$j--)
{
echo "* ";
}
echo "<br>";
}

?>
<?php
 
for($a=1; $a<=5; $a++)
{
 for($b=$a; $b>=1; $b--)
{
echo "$b";
}
echo "<br>";
}

echo"<br>";
for($a=5; $a>=1; $a--)
{
for($b=1; $b<=$a; $b++)
{
echo $b;
}
 echo "</br>";
}
?>



