<?php
session_start();
require_once "../model/functions.php";

// validate input
$dirtyText = inputValidation($_POST["text"]);
$dirty = inputValidation($_POST["dirty"]);
$clean = inputValidation($_POST["clean"]);

// Usage example
$inputFile = $dirtyText;
$outputFile = '../files/clean.txt';
$keywordMap = array(
  $dirty => $clean
);
$_SESSION["cleanText"] = $keywordMap;

if (isset($_POST["change"])) {


  if (emptyInput($dirtyText, $dirty, $clean) !== false) {
    header("location: ../view/index.php?error=emptyinputs");
    exit();
  }
  if (countWords($dirty) > 1 || countWords($clean) > 1) {
    header("location: ../view/index.php?error=toomanywords");
    exit();
  }
  if (matchWords($dirtyText, $dirty) !== false) {
    header("location: ../view/index.php?error=nosuchword");
    exit();
  }
  // replaceKeywords($inputFile, $outputFile, $keywordMap);
  replaceKeywords($inputFile, $outputFile, $keywordMap);
  header("location: ../view/response.php");
  exit();
}








// $keywordMap = array(
//   'Escrow' => 'Volt',
//   'volt' => 'Volt',
//   'solution' => 'limited'
// );