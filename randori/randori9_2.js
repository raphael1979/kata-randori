var table=["A","B","C","D","E"];
var random=[];
var pos, index;
var tableprop=[];
var propsplited;
for(i=0 ; i<3 ; i++){
pos=Math.floor(Math.random()*5);
random.push(table[pos]);
}
console.log(random);
var reussite = false;
for(var j=0; j<3; j++){
  var incr=0;
  var alerte = [];
  var prop = prompt('Entrez trois lettres de A à E :');
  prop = prop.split('');
  console.log(prop);
  for(i=0; i<3; i++){
  if(random.includes(prop[i])){
      if(prop[i]===random[i]){
        alerte.push("vraie");
        incr++;
      }else{
        alerte.push("presque");
      }
    }else{
      alerte.push("non");
    }
  }
  alert(alerte);
  if(incr===3){
  alert("GG");
  break;
}else if(j===2){
  alert("perdu");
}
}
