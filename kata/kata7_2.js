function diffBig2() {
  var tab = [10, 5, 2, 15, 56];
  var max = Math.max.apply(null, tab);
  var index = tab.indexOf(max); 
  tab.splice(index, 1);
  var max2 = Math.max.apply(null, tab);
  var result = max-max2;
  return(max + "-" + max2 + "=" + result);
  }

diffBig2();
