var input = prompt("qu'es tu veux toi ??");

console.log(input);


var diese = "#".repeat(input.length-4);

var sliced = input.slice(input.length-4);

//changed.push(sliced);

console.log(sliced);

var fini = diese+sliced;

//var fini = changed.join("");

console.log(fini);