<?php

function inputValidation($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function emptyInput($dirtyText, $dirty, $clean)
{
  $result = '';
  if (empty($dirtyText) || empty($dirty) || empty($clean)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}


function matchWords($dirtyText, $dirty)
{
  $result = '';
  if (!preg_match('/' . $dirty . '/', $dirtyText)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}


function replaceKeywords($inputFile, $outputFile, $keywordMap)
{
  // Read the content of the input file
  $content = $inputFile;

  // Replace the keywords with their corresponding values
  foreach ($keywordMap as $keyword => $replacement) {
    // $pattern = '/\b' . preg_quote($keyword, '/') . '\b/i';
    // $content = preg_replace($pattern, $replacement, $content);

    // Replace all occurrences of the word, regardless of word boundaries
    $content = str_replace($keyword, $replacement, $content);
  }

  // Write the modified content to the output file
  file_put_contents($outputFile, $content);

  header("location: ../view/response.php");
}
