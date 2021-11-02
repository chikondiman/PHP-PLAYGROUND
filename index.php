<!DOCTYPE html>
<html>
<body>
<?php

function sayNiceThings($name){
return $name . ", you're so freaking great! &" . $name . ",I love you're hair so much!";
}

$a=0;
while ($a<=10)
{
echo sayNiceThings($name = "jayla");
$a++;
}
?>
</body>
</html>