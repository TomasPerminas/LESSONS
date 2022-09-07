//============ 1 užduotis ============

console.log("============= 1 užduotis =============");

let rndText1 = "Keanu";
let rndText2 = "Reeves";

let length1 = rndText1.length;
let length2 = rndText2.length;

if (length1 > length2) {
    console.log(rndText1)
} else {
    console.log(rndText2)
};

//============ 2 užduotis ============

console.log("============= 2 užduotis =============");

let rndText3 = "Keanu";
let rndText4 = "Reeves";

let uppercase = rndText3.toUpperCase();
let lowercase = rndText4.toLowerCase();

console.log(uppercase + " " + lowercase);

//=========== 3 užduotis =============

console.log("============= 3 užduotis =============");

let rndText5 = "Keanu";
let rndText6 = "Reeves";

let firstLetter = rndText5.charAt(0) + " " + rndText6.charAt(0);

console.log(firstLetter);

//=========== 4 užduotis =============

console.log("============= 4 užduotis =============");

let rndText7 = "Keanu";
let rndText8 = "Reeves";

let lastLetters = rndText7.slice(-3) + " " + rndText8.slice(-3);

console.log(lastLetters);

//=========== 5 užduotis =============

console.log("============= 5 užduotis =============");

let american1 = "An American in Paris";
let replaced = american1.replaceAll("A", "*").replaceAll("a", "*");

console.log(replaced);

//=========== 6 užduotis =============

console.log("============= 6 užduotis =============");

let american2 = "An American in Paris";
let noVowels1 = american2.replace(/[aeiou]/gi, '');

console.log(noVowels1);

let breakfast = "Breakfast at Tiffany's";
let noVowels2 = breakfast.replace(/[aeiou]/gi, '');

console.log(noVowels2);

let oddysey = "2001: A Space Odyssey";
let noVowels3 = oddysey.replace(/[aeiou]/gi, '');

console.log(noVowels3);

let wonderful = "It's a Wonderful Life";
let noVowels4 = wonderful.replace(/[aeiou]/gi, '');

console.log(noVowels4);

//=========== 7 užduotis =============

console.log("============= 7 užduotis =============");

let starWars = "Star Wars: Episode "+ " ".repeat( Math.ceil(Math.random() * 10))+(Math.ceil (Math.random() * 7)+1) + " - A New Hope";
let episode = starWars.search(Math.ceil(Math.random() * 10))+(Math.ceil (Math.random() * 7)+1);

console.log(episode);
