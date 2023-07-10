<?php
require_once "../model/functions.php";

// validate input
$dirtyText = inputValidation($_POST["text"]);
$dirty = inputValidation($_POST["dirty"]);
$clean = inputValidation($_POST["clean"]);

// Usage example
$inputFile = $dirtyText;
$outputFile = '../clean.txt';
$keywordMap = array(
  $dirty => $clean
);


if (isset($_POST["change"])) {

  if (emptyInput($dirtyText, $dirty, $clean) !== false) {
    header("location: ../view/index.php?error=emptyinputs");
    exit();
  }
  if (matchWords($dirtyText, $dirty) !== false) {
    header("location: ../view/index.php?error=nosuchword");
    exit();
  }
  replaceKeywords($inputFile, $outputFile, $keywordMap);
}













// $keywordMap = array(
//   'Escrow' => 'Volt',
//   'volt' => 'Volt',
//   'solution' => 'limited'
// );