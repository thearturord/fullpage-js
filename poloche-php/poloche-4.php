<?php

include "../variables.php";

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subTitulo'];
$precio = $_POST['precio'];

if($titulo != ""){
  $reading = fopen('../variables.php', 'r');
  $writing = fopen('../variables.tmp', 'w');

  $replaced = false;

  while (!feof($reading)) {
    $line = fgets($reading);
    if (stristr($line,"\$poloche3")) {
      $line = str_replace($poloche3,$titulo,$line);
      $replaced = true;
      $poloche3 = false;

      }

    fputs($writing, $line);
  }
  fclose($reading); fclose($writing);
  // might as well not overwrite the file if we didn't replace anything
  if ($replaced)
  {
    rename('../variables.tmp', '../variables.php');
  } else {
    unlink('../variables.tmp');
  }
}

///------------------------

if($subtitulo != ""){

$reading = fopen('../variables.php', 'r');
$writing = fopen('../variables.tmp', 'w');

$replaced = false;

while (!feof($reading)) {
  $line = fgets($reading);
  if (stristr($line,"\$polocheSub3")) {
    $line = str_replace($polocheSub3,$subtitulo,$line);
    $replaced = true;
    $polocheSub3 = false;
    }

  fputs($writing, $line);
}
fclose($reading); fclose($writing);
// might as well not overwrite the file if we didn't replace anything
if ($replaced)
{
  rename('../variables.tmp', '../variables.php');
} else {
  unlink('../variables.tmp');
}

}

///------------------------

if ($precio != "") {
  $reading = fopen('../variables.php', 'r');
  $writing = fopen('../variables.tmp', 'w');

  $replaced = false;

  while (!feof($reading)) {
    $line = fgets($reading);
    if (stristr($line,"\$polochePrice3")) {
      $line = str_replace($polochePrice3,$price,$line);
      $replaced = true;
      $polochePrice3 = false;
      }

    fputs($writing, $line);
  }
  fclose($reading); fclose($writing);
  // might as well not overwrite the file if we didn't replace anything
  if ($replaced)
  {
    rename('../variables.tmp', '../variables.php');
  } else {
    unlink('../variables.tmp');
  }

}

header ('Location: ../message-sent.html');

?>
