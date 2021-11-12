<?php


function returnSeason($month){
switch($month)
  case "January":
  case "December":
  case "February":
    echo "Winter";
    break;
  case "March":
  case "April":
  case "May":
    echo "Spring";
    break;
  case "June":
  case "July":
  case "August":
    echo "summer";
    break;
  case "September":
  case "October":
  case "November":
    echo "fall";
    break;
}

$isClicked = FALSE;
if ( $isClicked ) {
  $link_color = "aqua";
} else {
  $link_color = "teal";
}


<?php


function ternaryCheckout($items)
{
    return $items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote ($age) 
{
  return $age >= 18 ? "yes" : "no";
 }

echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);

<?php


function truthyOrFalsy ($value)
{
  if ($value){
    return "True";
  } else {
    return "False";
  }
}

/*
// Alternate version using ternary:

function truthyOrFalsy ($value)
{
  return $value ? "True" : "False";
}


*/


echo truthyOrFalsy(TRUE);
echo "\n\n";
echo truthyOrFalsy(FALSE);
echo "\n\n";
echo truthyOrFalsy("cat");
echo "\n\n";
echo truthyOrFalsy("");
echo "\n\n";
echo truthyOrFalsy("-10290192.871");
echo "\n\n";
echo truthyOrFalsy("0");
echo "\n\n";

<?php

echo "Hello, there. What's your first name?\n";  

$name = readline(">> ");

$name_length = strlen($name);

if ($name_length > 8) {
  echo "Hi, ${name}. That's a long name.";
} elseif ($name_length > 3) {
  echo "Hi, ${name}.";
} else {
  echo "Hi, ${name}. That's a short name.";
}
