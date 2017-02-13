/*var number = new Object();
var input = [1, 1, 2, 2, 3, 4, 4];
number["1"] = 2;
number["2"] = 4;

for (var i = 0 ; i<input.length ; i++) {
   console.log(number[input.i]);
    
    
}
*/

  var array = [7, 7, 2, 2, 3, 4, 4, 5];
  console.log(array);
  var i, j, len = array.length, out = [], obj = {};
  for (i = 0; i < len; i++) {
    if (obj[array[i]] == undefined){
    obj[array[i]] = 1;
    }
    else {
      obj[array[i]] = array[i]++;
    }
    }
  console.log(obj);
  console.log(obj[7]);
  /*for (j = 0; j<len ; j++) {
    if (obj[array[j]] == 1){
  }
  } */
  
