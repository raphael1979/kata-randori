function ExpandedFirstForm(){
var input=prompt("entrez votre nombre");
var tabl= [];
for(i=2;i<=input; i++){
  while(input%i === 0){
    input=input/i;
    tabl.push(i);
  }
} 
console.log(tabl.join(" * "));
}
ExpandedFirstForm();
