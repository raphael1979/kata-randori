function getMiddle(input){
    var len= input.length;
  
if (len%2===0){
    var result = (input.slice(len/2-1, (len/2)+1));
}
 else {
   
   result = (input.slice(len/2, (len/2)+1));
   
 }
 console.log (result)
 }
