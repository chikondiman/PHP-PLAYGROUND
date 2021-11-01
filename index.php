<!DOCTYPE html>
<html>
<body>
<?php
function myTest() {
$a = 10; // local scope
echo "<p>Variable a inside function is: $a</p>";
}
myTest();
// using x outside the function will generate an error
echo "<p>Variable a outside function is: $a</p>";
? >
</body>
</html>