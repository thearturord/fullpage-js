<?php

include "../index.php";

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subTitulo'];

$reading = fopen('../index.php', 'r');
$writing = fopen('../index.tmp', 'w');

$replaced = false;

while (!feof($reading)) {
  $line = fgets($reading);
  if (stristr($line,$poloche0)) {
    $line = " \"$titulo\" \n";
    $replaced = true;
  }
  fputs($writing, $line);
}
fclose($reading); fclose($writing);
// might as well not overwrite the file if we didn't replace anything
if ($replaced)
{
  rename('../index.tmp', '../index.php');
} else {
  unlink('../index.tmp');
}


header ('Location: ../message-sent.html');



?>
