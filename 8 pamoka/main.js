//============= LENGVESNI ============

console.log("============== LENGVESNI =============");

//============ 1 užduotis ============

console.log("============= 1 užduotis =============");

let multiply = numbers(2, 3);

function numbers(a, b) {
    return a * b;

}

console.log(multiply);

//============ 2 užduotis ============

console.log("============= 2 užduotis =============");

let myName = "Tomai";

greeting(myName);

function greeting(myName) {
    console.log("Labas " + myName);

}

//============ 3 užduotis ============

console.log("============= 3 užduotis =============");

myText("Geriau eičiau fūrą vairuot")

function myText(text) {
    console.log(text.length);

}

//============ 4 užduotis ============

console.log("============= 4 užduotis =============");

let firstName = "tomas";
let lastName = "perminas";

names(firstName, lastName);

function names(firstName, lastName) {
    console.log(firstName[0].toUpperCase(0) + lastName[0].toUpperCase(0));

}

//============ 5 užduotis ============

console.log("============= 5 užduotis =============");

let numerofantastico = numberPlace(69);

function numberPlace(numerofantastico) {
    document.getElementById("numberPlace").innerText = "numberPlace yra:" + " " + numerofantastico;

}

//============ 6 užduotis ============

console.log("============= 6 užduotis =============");

function rndPrezikai(prezikai) {

    return prezikai[Math.floor(Math.random() * prezikai.length)];

}

let prezikai = ["Gitarius Nausėda", "Johny Sins", "Andrius Tapinas", "Vitalija Katunskytė", "Lukašenka"];
console.log(rndPrezikai(prezikai));

//============ 7 užduotis ============

console.log("============= 7 užduotis =============");

generateRandomNumbers(0, 5, 3)

function generateRandomNumbers(min, max, times) {
    let randoms = [];
    for (let i = 0; i < times; i++) {
        randoms.push(Math.floor(Math.random() * (max - min) + min))
    }
    console.log(randoms);

}

//============ 8 užduotis ============

console.log("============= 8 užduotis =============");



//============= VIDUTINIAI ============

console.log("============== VIDUTINIAI =============");

//============ 1 užduotis ============

console.log("============= 1 užduotis =============");

let result = exponent(2, 3);
console.log(result);

function exponent(a, b) {
    return Math.pow(a, b);
}

//============ 2 užduotis ============

console.log("============= 2 užduotis =============");

document.getElementById("title").innerText = "Atsakymas yra:" + " " + result;

//============ 3 užduotis ============

console.log("============= 3 užduotis =============");

