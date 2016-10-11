var valeur = Math.floor(Math.random() * (10000 - 0));
var d = new Date();
var time_start = d.getTime();
var i = 0;

while (i != valeur) {
	i++;
	var	time_end = d.getTime();
}

var time = time_end - time_start;

console.dir("nombre trouvé : " + valeur);
console.dir("temps écoule : " + time + " secondes");