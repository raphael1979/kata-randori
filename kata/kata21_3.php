function pairImpair($entier){
 if (!is_int($entier)){
   throw new Exception("c'est pas un entier");
 }
 if($entier%2===0){
   echo 'il est pair';
 }else{
   echo "il n'est pas pair";
 }
}
try {
pairImpair("banane");
} catch(Exception $e) {
   echo $e->getMessage();
}
