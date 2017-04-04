<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<h1>kata mot le plus long</h1>

<?php

echo "<form method='POST'>
<input type='text' value='".$_POST["input"]."' name='input' >
<button type='submit' name='send'>SEND</button>
</form>";
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
$dico_iter = $dico;


if (isset($_POST["send"])) {
  $input = $_POST["input"];
  $tabinput = str_split($input);
  foreach ($dico as $key => $mot_dico) {
    $arr_mot_dico = str_split($mot_dico);

    if (count(array_diff_once($arr_mot_dico, $tabinput)) !== 0){
      unset($dico_iter[$key]);
    }
  }
  array_multisort(array_map('strlen', $dico_iter), $dico_iter);
  $dico_iter_reverse = array_reverse($dico_iter);
  foreach ($dico_iter_reverse as $mot) {
    if (strlen($mot) == strlen($dico_iter_reverse[0])){
      echo $mot.'<br>';
    }
  }
}
function array_diff_once($array1, $array2) {
  foreach($array2 as $a) {
    $pos = array_search($a, $array1);
    if($pos !== false) {
      unset($array1[$pos]);
    }
  }
  return $array1;
}

?>
</html>
