<?php
define("NEW_CONSTANT", "Hello there you constanty constant!");
$regInt = 7;
$octInt = 01234;
$hexNum = 0xABC;
$boolVar = false;
$stringVar = "Strings and things.";
// echo is_string($stringVar);
// echo is_bool($stringVar);
// echo is_bool($boolVar);
// echo is_int($regInt);
// echo defined("NEW_CONSTANT");
// echo(NEW_CONSTANT);

function echoVar($variable) {
  return $variable;
}

// echo echoVar($stringVar);

function creatingShortParagraph($firstLine, $secondLine = "This is the end") {
  return $firstLine . "\n" . $secondLine . "\n";
}
$globalVar = "global";
function basicGlobal() {
  global $globalVar;
  $globalVar = "scoped";
}
basicGlobal();
echo $globalVar;
// echo creatingShortParagraph($stringVar);
$variableFunction = "creatingShortParagraph";
echo $variableFunction("param");
echo creatingShortParagraph($stringVar, "ending now.");
