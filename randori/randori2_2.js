//Solution Laurent
//var input = [1,2,3,4,5];
//var filtre = [1,2];

var input = ["abc","a","b","abcde","e"];
var filtre = ["abc","z","e"];


function filtrer(array1, array2){
  function inFilter(number){
    return filtre.indexOf(number) < 0;
}
console.log(input.filter(inFilter));
}

filtrer(input, filtre);

//Solution groupe
/*function difference(){
var input1 = prompt(" Entrer votre liste de chiffres");
var input2= prompt(" Entrer une valeur de comparaison");
var result=[];


for(i=0; i<input1.length; i++){ 
  var other=0;
  for(j=0; j<input2.length; j++){
    if(input1[i] ==  input2[j]){
      other++;
    }  
  }
  if(other===0){
    result.push(input1[i])
  }
}
console.log("Les chiffres differents sont: "+ result);
}
difference();*/