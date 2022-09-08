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