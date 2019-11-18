<?php

include "../variables.php";

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subTitulo'];


echo $titulo;
echo $taza0;

// $reading = fopen('../variables.php', 'r');
// $writing = fopen('../variables.txt', 'w');
//
// $replaced = false;
//
// while (!feof($reading)) {
//   $line = fgets($reading);
//   if (stristr($line,$taza0)) {
//     $line = " \"$titulo\" \n";
//     $replaced = true;
//   }
//   fputs($writing, $line);
// }
// fclose($reading); fclose($writing);
// // might as well not overwrite the file if we didn't replace anything
// if ($replaced)
// {
//   rename('../variables.txt', '../variables.php');
// } else {
//   unlink('../variables.txt');
// }
//
// header ('Location: ../message-sent.html');

?>
