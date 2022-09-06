// Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

let name = "Tomas";
let surname = "Perminas";
let birthYear = 1990;
let currentYear = 2022;

console.log("Aš esu " + name + " " + surname + ". Man yra " + (currentYear - birthYear) + " metai (-ų)." );
console.log("=============== 1 uždavinys ============");

//=============== 1 uždavinys =================

let rndNum = Math.round( Math.random() * 4 );  // nuo 0 iki 4;
let rndNum2 = 35 + Math.round( Math.random() * (40 - 35) );  // nuo 35 iki 40

console.log(rndNum);
console.log(rndNum2);
