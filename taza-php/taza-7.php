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

    if (stristr($line,"\$taza6")) {
      $line = str_replace($taza6,$titulo,$line);
      $replaced = true;
      $taza6 = false;
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
  if (stristr($line,"\$tazaSub6")) {
    $line = str_replace($tazaSub6,$subtitulo,$line);
    $replaced = true;
    $tazaSub6 = false;
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
    if (stristr($line,"\$tazaPrice6")) {
      $line = str_replace($tazaPrice6,$precio,$line);
      $replaced = true;
      $tazaPrice6 = false;
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
