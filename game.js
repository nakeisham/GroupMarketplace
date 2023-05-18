//Text Based
var num1 = 0;
var num2 = 0;
var num3 = 0;
var tokens = 1000;
var bet = 10;
var winAmount = 0;
var slot1;
var slot2;
var slot3;
var tokenText;
var matches;
var betAmountText;
var spinsText;
var spin;
var lastWin;
var changeBet;
var slot1Image;
var slot2Image;
var slot3Image;
var active = false;

// Animation
var spinner1;
var spinner2;
var spinner3;
var spaceButton;
var spaceButtonGreen;

// Audio
var spinSound;
var payoutSound;

// Testing
var totalSpins = 0;
var totalWin = 0;
var averageWin = 0;
var totalSpinsText;
var totalWinText;
var averageWinText;

let config = {
    type: Phaser.AUTO,
    width: 1000,
    height: 800,
    scale: {
        mode: Phaser.Scale.FIT,
        autoCenter: Phaser.Scale.CENTER_BOTH,
        min: {
            width: 800,
            height: 640,
        },
        max: {
            width: 2000,
            height: 1600
        },
        zoom: 1,
    },
    parent: 'slotGame',
    autoCenter: Phaser.Scale.CENTER_BOTH,
    physics: {
        default: 'arcade',
        arcade: {
            debug: false
        }
    },
    scene: {
        preload: preload,
        create: create,
        update: update
    }
}

function preload() {
    // Background Image
    this.load.image('background', 'Assets/Images/background.png');
    
    // Icons
    this.load.image('diamond', 'Assets/Images/diamondBigger.png');
    this.load.image('zero', 'Assets/Images/blank.png');
    this.load.image('cherry', 'Assets/Images/cherryBigger.png');
    this.load.image('diamonds', 'Assets/Images/diamondsBigger.png');
    this.load.image('goldBar', 'Assets/Images/goldBarBigger.png');
    this.load.image('goldCoin', 'Assets/Images/goldCoinBigger.png');
    this.load.image('seven', 'Assets/Images/sevenBigger.png');
    this.load.image('watermelon', 'Assets/Images/watermelonBigger.png');
    this.load.image('dash','Assets/Images/Dash.png');

    // SpriteSheets
    this.load.spritesheet('animation', 'assets/images/spritesheet.png', {
        frameWidth: 128,
        frameHeight: 128
    });

    this.load.spritesheet('animation2', 'assets/images/spritesheet2.png', {
        frameWidth: 128,
        frameHeight: 128
    });

    this.load.spritesheet('animation3', 'assets/images/spritesheet3.png', {
        frameWidth: 128,
        frameHeight: 128
    });

    // Spin Animation Spritesheet
    this.load.spritesheet('spaceAnimation', 'assets/images/spritesheetEnterRed.png', {
        frameWidth: 1000,
        frameHeight: 800
    });

    this.load.spritesheet('spaceAnimationGreen', 'assets/images/spritesheetEnterGreen.png', {
        frameWidth: 1000,
        frameHeight: 800
    });

    // Load Audio
    this.load.audio('playSound', 'assets/audio/playSound.mp3');
    this.load.audio('payoutSound', 'assets/audio/payoutSound.mp3');
}

function create() {
    // Background Image
    this.add.image(500, 400, 'background');

    // Icons/Images
    slot1Image = this.add.image(268, 450, '');
    slot2Image = this.add.image(502, 450, '');
    slot3Image = this.add.image(736, 450, '');

    spinner1 = new Animate(this, 268, 450, 'animation2');
    spinner2 = new Animate2(this, 502, 450, 'animation3');
    spinner3 = new Animate3(this, 736, 450, 'animation');

    spaceButton = new Animate4(this, 500, 400, 'spaceAnimation');
    spaceButtonGreen = new Animate5(this, 500, 400, 'spaceAnimationGreen');

    // Audio
    spinSound = this.sound.add('playSound');
    payoutSound = this.sound.add('payoutSound');

    // Create GUI
    createGUI(this);
}

function update() {
    updateGUI();

    updateIcons();
}

function createGUI(scene) {
    tokenText = scene.add.text(500, 220, 'Tokens: ' + tokens, {font: '54px Arial', fill: '#000' }).setOrigin(0.5);                               

    betAmountText = scene.add.text(220, 655, "Bet Amount: " + bet, {font: '24px Arial', fill: '#000' }).setOrigin(0.5);

    changeBet = scene.add.text(200, 710, '"⮞" Increase Bet \n"⮜" Decrease Bet', {font: '20px Arial', fill: '#000' }).setOrigin(0.5);

    lastWin = scene.add.text(780, 655, "Last Win: " + winAmount, {font: '24px Arial', fill: '#000' }).setOrigin(0.5);
                             
    // Testing
    //totalSpinsText = scene.add.text(0, 100, "Total Spins: " + totalSpins, {font: '20px Arial', fill: '#EEE' });
    //totalWinText = scene.add.text(0, 120, "Total Win: " + totalWin, {font: '20px Arial', fill: '#EEE' });
    //averageWinText = scene.add.text(0, 140, "Average Win: " + averageWin, {font: '20px Arial', fill: '#EEE' });
}

function updateGUI() {
    tokenText.setText('Tokens: ' + tokens);
    betAmountText.setText("Bet Amount: " + bet);
    //spinsText.setText("Spins: " + spins);
    lastWin.setText("Last Win: " + winAmount);

    // Testing
    //totalSpinsText.setText("Total Spins: " + totalSpins);
    //totalWinText.setText("Total Win: " + totalWin);
    //averageWinText.setText("Average Win: " + averageWin.toFixed(2));                
}

let game = new Phaser.Game(config); 