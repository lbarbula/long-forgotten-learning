<?php
//single quote, nothing is evaluated, printed as written.
$currency = 'dong.';
$currencyDeclaration = "My $currency is worth less than the dollar.";
// echo $currencyDeclaration;

$templateInsertion = "baby back";
$stringToInsertInto = "I want my {$templateInsertion} {$templateInsertion} {$templateInsertion}"."ed ribs.";
// echo $stringToInsertInto;

// echo <<<EOT
//       A big block of
//     text though i'm not
//     sure why.
// EOT;

print "text";
