let count = 0;

for (let index = 0; index < 300; index++) {
    let rndNum = Math.round(Math.random() * 300);

    if (rndNum > 150) {
        count++
    }

    if (rndNum > 275) {
        console.log(" [ " + rndNum + " ] ");
    }
    else {
        console.log(rndNum);
    }

}

console.log(count);