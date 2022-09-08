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

for (let i = 0; i <= 100; i++) {
    oneLine3 += "*";

}

console.log(oneLine3);