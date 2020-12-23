<!doctype html>
<html>
<body>
<h1> PHP Functions and Looping</h1>

<?php
function writeMsg($name,$age=23) {
	echo "Hello ".$name."<br>";
	echo "Your age is : ".$age;
}

writeMsg("Hameed"); // call the function

echo "<h1> PHP Looping</h1>";
$x = 6; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

for($a=0;$a<=5;$a++)
{
	echo "The number is: $a <br>";
}
$colors = Array("red", "green", "blue", "yellow","White"); 

foreach ($colors as $value) {
  echo "$value <br>";
}

$age = Array("Selva"=>"22", "Ravi"=>"21", "Gayathri"=>"20");

foreach($age as $x => $val) {
  echo "$x = $val<br>";

} 

?> 
</body>
</html>