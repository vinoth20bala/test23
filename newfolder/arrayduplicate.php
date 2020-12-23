<?php
$p = Array(1,2,3,4,5,6,7,8,6,5,7,5);

$p1 = Count($p);
echo "Duplicate Elements from $p1 elements are.. <br>";

for($i=0;$i<$p1;$i++)
{ 
    for($j=$i+1;$j<$p1;$j++)
	{
		if ($p[$i] == $p[$j])
		{  
			echo "$p[$i] <br>";
	}   }
}

/*
{
for($j=$i+1;$j<$p1;$j++)
{
if($p[$i]==$p[$j])
{
echo $p[$i];
` }
} 
} */
echo " OVER";
?>