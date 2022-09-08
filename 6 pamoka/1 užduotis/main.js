//============ 1 užduotis ============

console.log("============= 1 užduotis =============");

let count = 0;
let space = " ";

for (let index = 0; index < 300; index++) {
    let rndNum = Math.round(Math.random() * 300);

    if (rndNum > 150) {
        count++
    }

    if (rndNum > 275) {
        space += " [ " + rndNum + " ] ";
    }
    else {
        space += rndNum + " ";
    }

}

console.log(space);

//============ 2 užduotis ============

console.log("============= 2 užduotis =============");