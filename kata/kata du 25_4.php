function jacky($input,$k){
 $input = str_split (strval($input)); 
$length=count($input);

$reset=0; 
for($i=0;$i<=$length-$k;$i++){
  $result=1;
  for($j=0;$j<$k;$j++){
    $result*=$input[$i+$j];
  }
 
 if($result > $reset){
   $reset = $result;
 } 
}
 echo($reset);

}
jacky(1027839564,3);
