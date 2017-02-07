/*findUniqString([ 'abc', 'acb', 'bac', 'foo', 'bca', 'cab', 'cba' ])*/
var table=['Aaa', 'abc', 'acb', 'bac', 'BbBb', 'Aaaa', 'AaAaAa', 'a' ];
var min=[];
for (k=0; k<table.length; k++) {
min.push(table[k].toLowerCase());
}
var answer=[];
var answer2=[];

var splitted=min[0].split("");
console.log(splitted);

for (i=0; i<min.length;i++){
for (j=0;j<splitted.length;j++){
if (min[i].includes(splitted[j])===false) {
  answer.push(table[i]);
   }
else if (min[i].includes(splitted[j])===true)
  answer2.push(table[i]);
}
}
if (answer.length>answer2.length) {
console.log(answer2[0]);
}
else{
console.log(answer[0]);
}