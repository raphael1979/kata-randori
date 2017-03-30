$annee = 1007;

function leap($x){
  if(!is_int($x))throw new Exception('not a year');
  if($x%4!==0)throw new Exception('not a leap');
  if($x%100!==0)throw new Exception('a leap');
  if($x%400!==0)throw new Exception('not a leap');
  return 'a leap';
}

try {
  echo leap($annee);
}catch(Exception $e) {
  echo $e->getMessage();
}
