//code groupe
function trinary($input){
  $input=str_split($input);
  $tab=[];
  $reverse = array_reverse($input);
foreach($reverse as $key => $value){
  $var= $value * pow(3, $key);
   array_push($tab, $var);
}
echo array_sum($tab);
}

trinary(102012);

//code quentin

function trinary($input){
  $array1=str_split($input);
  $reverse=array_reverse($array1);
  $result=0;
  foreach($reverse as $key =>$value){
    $result=$result+=($value*pow(3,$key));
  }
echo $result;  
}
trinary(102012); 
