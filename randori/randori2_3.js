function crypter(chaine, n){
   for (j=0; j<n; j++){
       var tab1 = [];
       var tab2 = [];
   var splited = chaine.split("");
for (i = 0 ; i<splited.length ; i++){
   if (i%2 === 0){
       tab1.push(splited[i]);
   }else if (i%2 !== 0){
       tab2.push(splited[i]);
   }
}
result = tab2.join("")+ tab1.join("");
chaine = result;
}
return result;
}
function decrypter (encryptedText, n){
   var result;
   var exit;
   for(j=0; j<n; j++){
       result = [];
   var chaine1 = encryptedText.substring(0,encryptedText.length/2);
   var chaine = encryptedText.substring(encryptedText.length/2 );
   for(i=0; i<chaine.length; i++){
       if(chaine1[i]===undefined){
           exit = "";
       }else{
           exit = chaine1[i];
       }
       result.push(chaine[i]+exit)
   }
   encryptedText = result.join("");
   }
   return encryptedText;
}
console.log(decrypter(crypter("This is a test!",1), 0))
