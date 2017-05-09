function nickel($input){
$inputtemp = $input;
$coins = [1, 5, 10, 25, 100];
$coins = array_reverse($coins);
$result = [0, 0, 0, 0, 0];
foreach($coins as $key => $coin){
  while($inputtemp >=$coin){
    $inputtemp -= $coin;
    $result[$key]++;
  }
}
$result = array_reverse($result);
return "[".join(", ", $result)."]";
}
echo nickel(192);
