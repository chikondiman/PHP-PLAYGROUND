<!DOCTYPE html>
<html>
<body>
<?php

function sayNiceThings($name){

return $name . ", you're so freaking great! " . "and" . $name . "I love you're hair";
}

$a=0;
while ($a<=10)
{
echo sayNiceThings($name = "jay");
$a++;
}
?>
</body>
</html>