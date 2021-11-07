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