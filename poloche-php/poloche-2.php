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
    if (stristr($line,"\$poloche1")) {
      $line = str_replace($poloche1,$titulo,$line);
      $replaced = true;
      $poloche1 = false;

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
  if (stristr($line,"\$polocheSub1")) {
    $line = str_replace($polocheSub1,$subtitulo,$line);
    $replaced = true;
    $polocheSub1 = false;
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
    if (stristr($line,"\$polochePrice1")) {
      $line = str_replace($polochePrice1,$price,$line);
      $replaced = true;
      $polochePrice1 = false;
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
