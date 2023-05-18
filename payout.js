console.log("Tokens: ", tokens);

document.addEventListener('keyup', event => {
    if (event.code === 'Enter') {
        if (active == false) {
            if (tokens >= bet) {
                spaceButtonGreen.anims.play("spaceBarGreen");
                spinSound.play();
                active = true;
                tokens -= bet;
                setTimeout(playTurn, 3000); // run after 3 seconds
            
                playanims();
            } else {
                spaceButton.anims.play("spaceBar");
                console.log("Not Enough Tokens1");
            }
        } else {
            spaceButton.anims.play("spaceBar");
            console.log("Not Enough Tokens");
        }
    } else if (event.code === "ArrowRight") {
        if (active == false) {
            if (bet < 1000 && tokens >= bet * 10) {
                bet = bet * 10;
                console.log("Bet increased to", bet);
            } else {
                console.log("Already at max bet");
            }
        }
    } else if (event.code === "ArrowLeft") {
        if (active == false) {
            if (bet > 1) {
                bet = bet / 10;
                console.log("Bet deacreased to", bet);
            } else {
                console.log("Already at minimum bet");
            }
        }
    }
}) 

function calcNum() {
    number = Math.floor(Math.random() * 100)

    if (number < 49) {
        number = 8;
    } else if (number >= 49 && number < 69) {
        number = 1;
    } else if (number >= 69 && number < 79) {
        number = 2;
    } else if (number >= 79 && number < 87) {
        number = 3;
    } else if (number >= 87 && number < 93) {
        number = 4;
    } else if (number >= 93 && number < 97) {
        number = 5;
    } else if (number >= 97 && number < 99) {
        number = 6;
    } else if (number >= 99 && number < 100) {
        number = 7;
    }

    return number;
}

function playanims() {
    num1 = 0;
    num2 = 0;
    num3 = 0;

    spinner1.visible = true;
    spinner1.anims.play("spin");

    spinner2.visible = true;
    spinner2.anims.play("spin2");

    spinner3.visible = true;
    spinner3.anims.play("spin3");
}

function playTurn() {

    spinner1.visible = false;
    spinner2.visible = false;
    spinner3.visible = false;

    console.clear();
    winAmount = 0;
    console.log("Bet:", bet);
    console.log('Space pressed');
    num1 = calcNum();
    num2 = calcNum();
    num3 = calcNum();

    console.log(num1, num2, num3);

    if (num1 == 1 && num2 != 1 && num3 != 1) {
        matches = 0;
        console.log('Matches:', matches);

        winAmount = bet * 2;
        tokens += winAmount;
        console.log('Tokens Won: ' + winAmount);

    } else if (num1 != 1 && num2 == 1 && num3 != 1) {
        matches = 0;
        console.log('Matches:', matches);

        winAmount = bet * 2;
        tokens += winAmount;
        console.log('Tokens Won: ' + winAmount);
    } else if (num1 != 1 && num2 != 1 && num3 == 1) {
        matches = 0;
        console.log('Matches:', matches);

        winAmount = bet * 2;
        tokens += winAmount;
        console.log('Tokens Won: ' + winAmount);
    } else if (num1 == num2 && num1 != num3 && num2 != num3) {
        matches = 2;
        console.log('Matches:', matches);
        if(num1 == 1 && num2 == 1) {
            winAmount = bet * 5;
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        }
    } else if (num1 == num3 && num1 != num2 && num2 != num3) {
        matches = 2;
        console.log('Matches:', matches);
        if(num1 == 1 && num3 == 1) {
            winAmount = bet * 5;
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        }
    } else if (num2 == num3 && num1 != num2 && num1 != num3) {
        matches = 2;
        console.log('Matches:', matches);
        if(num2 == 1 && num2 == 1) {
            winAmount = bet * 5;
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        }
    } else if (num1 == num2 && num1 == num3 && num2 == num3) {
        matches = 3;
        console.log('Matches:', matches);
        if (num1 == 1) {
            winAmount = bet * 25
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        } else if (num1 == 2) {
            winAmount = bet * 50
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        } else if (num1 == 3) {
            winAmount = bet * 75
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        } else if (num1 == 4) {
            winAmount = bet * 100
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        } else if (num1 == 5) {
            winAmount = bet * 250
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        } else if (num1 == 6) {
            winAmount = bet * 500
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        } else if (num1 == 7) {
            winAmount = bet * 1000
            tokens += winAmount;
            console.log('Tokens Won: ' + winAmount);
        }
    }

    if (winAmount > 0) {
        payoutSound.play();
    }

    // Testing
    totalSpins += 1;
    totalWin += winAmount - bet;
    averageWin = totalWin / totalSpins;

    console.log("Tokens: ", tokens);

    active = false;
}