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
    if (stristr($line,"\$gorra1")) {
      $line = str_replace($gorra1,$titulo,$line);
      $replaced = true;
      $gorra1 = false;
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

///-----------------------------

if($subtitulo != ""){

$reading = fopen('../variables.php', 'r');
$writing = fopen('../variables.tmp', 'w');

$replaced = false;

while (!feof($reading)) {
  $line = fgets($reading);
  if (stristr($line,"\$gorraSub1")) {
    $line = str_replace($gorraSub1,$subtitulo,$line);
    $replaced = true;
    $gorraSub1 = false;
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

///-------------------------------

if ($precio != "") {

  $reading = fopen('../variables.php', 'r');
  $writing = fopen('../variables.tmp', 'w');

  $replaced = false;

  while (!feof($reading)) {
    $line = fgets($reading);
    if (stristr($line,"\$gorraPrice1")) {
      $line = str_replace($gorraPrice1,$precio,$line);
      $replaced = true;
      $gorraPrice1 = false;
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
