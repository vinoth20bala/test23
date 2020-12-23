<!doctype html>
<html>
<body>
<h1> PHP ARRAYS</h1>
<?php
$pl=Array('C','JAVA','PHP','PYTHON','C++');
echo "$pl[2]"."<br>";
print("Array Concept <br>"."Hameed <br>");
print("$pl[0],$pl[1] <br>");
print_r($pl);
echo "<br>";
print_r($pl[2],"Array");
//Associate array
echo "Associate Array <br>";
$plm=Array('C'=>73,'JAVA'=>78,'PHP'=>98,'PYTHON'=>79,'C++'=>87);
print_r($plm);
echo "<br>";
print_r($pl);
echo "<br> Mark of C is :".$plm['C'];
?>
</body>
</html>