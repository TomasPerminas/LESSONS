//============= LENGVESNI ============

console.log("============== LENGVESNI =============");

//============ 1 užduotis ============

console.log("============= 1 užduotis =============");

for (let i = 0; i < 10; i++) {
    console.log("Labas");
}

//============ 2 užduotis ============

console.log("============= 2 užduotis =============");

for (let i = 0; i < 10; i++) {
    console.log(i);
}

//============ 3 užduotis ============

console.log("============= 3 užduotis =============");

let plants = ["plant1", "plant2", "plant3", "plant4", "plant5", "plant6", "plant7", "plant8", "plant9", "plant10"];
console.log(plants);

//============ 4 užduotis ============

console.log("============= 4 užduotis =============");

for (let i = 0; i < plants.length; i++) {
    console.log(plants[i]);
}

//============ 5 užduotis ============

console.log("============= 5 užduotis =============");



//============= SUNKESNI =============

console.log("============== SUNKESNI ==============");

//============ 1 užduotis ============

console.log("============= 1 užduotis =============");

let count = 0;
let oneLine = "";

for (let index = 0; index < 300; index++) {
    let rndNum = Math.round(Math.random() * 300);

    if (rndNum > 150) {
        count++
    }

    if (rndNum > 275) {
        oneLine += " [ " + rndNum + " ] ";
    }
    else {
        oneLine += rndNum + " ";
    }

}

console.log(oneLine);

//============ 2 užduotis ============

console.log("============= 2 užduotis =============");


let oneLine1 = "";

for (let i = 0; i < 3000; i++) {
    if (i % 77 == 0) {
        oneLine1 += (i + ",");
    }

}

console.log(oneLine1.slice(0, -1));

//============ 3 užduotis ============

console.log("============= 3 užduotis =============");

let oneLine3 = "";

for (let a = 0; a < 100; a++) {
    let oneLine3 = "";

    for (let i = 0; i <= 100; i++) {
        oneLine3 += "*";

    }

    console.log(oneLine3);

}

//============ 4 užduotis ============

console.log("============= 4 užduotis =============");

//============ 5 užduotis ============

console.log("============= 5 užduotis =============");

