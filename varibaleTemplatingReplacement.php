<?php
//single quote, nothing is evaluated, printed as written.
$currency = 'dong.';
$currencyDeclaration = "My $currency is worth less than the dollar.";
// echo $currencyDeclaration;

$templateInsertion = "baby back";
$ribs = "ribs";
$stringToInsertInto = "I want my {$templateInsertion} {$templateInsertion} {$templateInsertion}"."ed "."{$ribs}";

function changeMyText($stringToFind, $stringToChange, $whatToReplaceWith) {
  if(strpos($stringToFind, $stringToChange) >= 0) {
    return str_replace($stringToFind, $whatToReplaceWith, $stringToChange);
  } else {
    return "Can't find that string to replace.";
  }
}

function manipulateSomeText($stringToSub, $whenToStart, $howManyCharactersToAccept) {
  return substr($stringToSub, $whenToStart, $howManyCharactersToAccept);
}

echo changeMyText($ribs, $stringToInsertInto, $currency);
echo "\n";
echo manipulateSomeText($stringToInsertInto, 4, 5);
echo "\n";
echo manipulateSomeText($stringToInsertInto, 0, -5);
echo "\n";
echo manipulateSomeText(changeMyText($ribs, $stringToInsertInto, $currency), 0, 0);
$arrayVar = str_split($stringToInsertInto, 3);
print_r($arrayVar);
