$alpha=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v",'w',"x",'y',"z"];
$input="The quick brown fox jumps over the lazy dog.";
$inputtemp=".".(strtolower($input));
// echo $inputtemp." ";
try {
  for($i=0 ;$i<count($alpha) ;$i++){
    if(!strpos($inputtemp, $alpha[$i])){
      throw new Exception ('"'.$input.'" n\'est pas un Pangram');
    }
  }
  throw new Exception ('"'.$input.'" est un Pangram');
} catch(Exception $e) {
  echo $e->getMessage();
}
