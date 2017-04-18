$input = 1755;
$inputemp = $input;
$tabl = [];
for($i=2; $i <= $inputemp; $i++){
    while($inputemp%$i===0){
        $tabl[] = $i;
        $inputemp = $inputemp/$i;
    };
};
$tabl1 = array_unique($tabl);
$result = '';
foreach($tabl1 as $nb){
    switch($nb){
        case 3 :
            $result .= 'Pling';
            break;
        case 5 :
            $result .= 'Plang';
            break;
        case 7 :
            $result .= 'Plong';
            break;
    }
}
if(!$result)$result = $input;
echo $result;
