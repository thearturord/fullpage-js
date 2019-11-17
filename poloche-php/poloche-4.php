<?php

include "variables.php";

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subTitulo'];

$reading = fopen('variables.php', 'r');
$writing = fopen('../variables.tmp', 'w');

$replaced = false;

while (!feof($reading)) {
  $line = fgets($reading);
  if (stristr($line,$poloche3)) {
    $line = " \"$titulo\" \n";
    $replaced = true;
  }
  fputs($writing, $line);
}
fclose($reading); fclose($writing);
// might as well not overwrite the file if we didn't replace anything
if ($replaced)
{
  rename('../variables.tmp', 'variables.php');
} else {
  unlink('../variables.tmp');
}


header ('Location: ../message-sent.html');



?>
