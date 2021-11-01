<!DOCTYPE html>
<html>
<body>
<?php $a = 10; // global scope
function myTest() {
// using a inside this function will generate an error
echo "<p>Variable a inside function is: $a</p>";
}
myTest();
echo "<p>Variable a outside function is: $a</p>";

</html>