code groupe
$tabl = [];
$N = 42;
$tabl2= [];
/*echo pow(array_sum($tabl),2);*/

for($i=1; $i<=$N; $i++){
array_push($tabl,$i);
}
$autrechose = pow (array_sum($tabl),2);
/*Partie 2*/
for($j=1; $j<=$N; $j++){
  $carre=pow($j,2);
array_push($tabl2,$carre);

}
$quelquechose = array_sum( $tabl2);

$result = $autrechose - $quelquechose;

echo $result;

code laurent

$n = 5;
           $result = 0;

           foreach(range(1,$n) as $nbre){
               $result += $nbre ** 2;
           }
           echo array_sum(range(1,$n)) ** 2 - $result;

code quentin

$total=0;
$N=42;
$sumsquare=0;
for ($i=0;$i<=$N;$i++){
  $total+=$i;
}
$squaresum=$total*$total;
for ($j=0;$j<=$N;$j++)
{
  $sumsquare+=($j*$j);
}
$result=$squaresum-$sumsquare;
echo $squaresum." - ".$sumsquare." = " . $result;

code gena

$sum = $square = 1;  
for ($i = 2; $i <= 100; $i++) {  
 $sum += ($i * $i);  
 $square += $i;  
}  
$result = ($square * $square) - $sum;  
echo $result;


