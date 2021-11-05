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