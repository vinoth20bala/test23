<!doctype html>
<html>
<body>
<h1> PHP IF</h1>

<?php
$t = date("H");
echo $t."<br>";
echo date('d-m-y')."<br>";
echo date('H-i-s')."<br>";
if ($t >= "05" and $t <="12") 
    echo "Good Morning!";
elseif ($t > "13" and $t <="15") 
    echo "Good Afternoon!";

?> 
</body>
</html>