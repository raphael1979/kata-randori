<?php
$tab = array(1, -4, 7.2, 12, 10, -7);
$result = 0;
foreach($tab as $nbr) {
  if (is_int($nbr) && $nbr > 0) {
  $result += $nbr;
  }  
}

echo $result;
?>
