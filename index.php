<?php


function returnSeason($month){
switch($month)
  case "January":
  case "December":
  case "February":
    echo "winter";
    break;
  case "March":
  case "April":
  case "May":
    echo "spring";
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
  $link_color = "purple";
} else {
  $link_color = "blue";
}


<?php
namespace Codecademy;

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