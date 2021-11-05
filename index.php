<?php
namespace Codecademy;

function agreeOrDisagree($string1,$string2){
  if ($string1 === $string2){
    return "You agree!";
  }
  else{
    return "You disagree!";
  }
}

echo agreeOrDisagree("not","there");
echo agreeOrDisagree("not","not");

function checkRenewalMonth($renewalMonth){
  if (date("F") !==     $renewalMonth)
  {
  return "Welcome!";
}
else {
  return "Time to renew";
}
}

echo checkRenewalMonth("January");

echo checkRenewalMonth("November");