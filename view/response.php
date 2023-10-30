<?php
session_start();
require_once "header.php";
$decodedContent = htmlspecialchars_decode(file_get_contents('../files/clean.txt'));
$preview = '<textarea class="previewText" cols="30" rows="30" disabled>' . $decodedContent . '</textarea>';

$response = '<div class="response">
<h1>Content has been modified and saved to clean.Text</h1>
<a href="../files/clean.txt" download class="back" download="clean.txt" type="text/plain; charset=UTF-8">Download file</a><b/>
<a href="index.php" class="back">Go Back</a>
</div>';

echo $response;
echo $preview;
