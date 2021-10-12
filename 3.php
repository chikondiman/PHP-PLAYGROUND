<!-- Create a webpage that matches the image below.

The webpage should print 300 lines of text.
Each line should read "Hello World" except for every 5th line which should read 
"Hello Abre Interview".
Exact font sizes are not necessary. Please use #1B2B5C for the background color. -->


<!DOCTYPE html>
<html>
<style>

body {
  background-color: #1B2B5C;
  color: white;
  text-align: center;
  border-style: double;
}

</style>

<div >
  <h1> </h1>

<body>

  <?php
    for ($i=1; $i <= 300; $i++) {
      if($i%5 == 0) {
        echo "Hello Abre Interview"."<br />";
      } 
      else {
        echo "Hello Word"."<br />";
      }
    }
  ?>
</div>
</body>
</html>