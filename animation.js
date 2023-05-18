class Animate extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, xPos, yPos, texture) {
        super(scene, xPos, yPos, texture);
        // Add walking animations

        // animation
        scene.anims.create({
            key: 'spin',
            frames: scene.anims.generateFrameNumbers(texture, {
                start: 0,
                end: 6
            }),
            frameRate: 7,
            repeat: 2
        });
        this.anims.load('spin');

        // Add to scene
        scene.add.existing(this);
    }

} // End of class

class Animate2 extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, xPos, yPos, texture) {
        super(scene, xPos, yPos, texture);
        // Add walking animations

        // animation
        scene.anims.create({
            key: 'spin2',
            frames: scene.anims.generateFrameNumbers(texture, {
                start: 0,
                end: 6
            }),
            frameRate: 7,
            repeat: 2
        });
        this.anims.load('spin2');

        // Add to scene
        scene.add.existing(this);
    }

} // End of class

class Animate3 extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, xPos, yPos, texture) {
        super(scene, xPos, yPos, texture);

        // animation
        scene.anims.create({
            key: 'spin3',
            frames: scene.anims.generateFrameNumbers(texture, {
                start: 0,
                end: 6
            }),
            frameRate: 7,
            repeat: 2
        });
        this.anims.load('spin3');

        // Add to scene
        scene.add.existing(this);
    }

} // End of class

class Animate4 extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, xPos, yPos, texture) {
        super(scene, xPos, yPos, texture);

        // animation
        scene.anims.create({
            key: 'spaceBar',
            frames: scene.anims.generateFrameNumbers( texture, {
                start: 0,
                end: 6
            }),
            frameRate: 15,
            repeat: 0
        });
        this.anims.load('spaceBar');

        // Add to scene
        scene.add.existing(this);
    }
}

class Animate5 extends Phaser.Physics.Arcade.Sprite {
    constructor(scene, xPos, yPos, texture) {
        super(scene, xPos, yPos, texture);

        // animation
        scene.anims.create({
            key: 'spaceBarGreen',
            frames: scene.anims.generateFrameNumbers( texture, {
                start: 0,
                end: 6
            }),
            frameRate: 15,
            repeat: 0
        });
        this.anims.load('spaceBarGreen');

        // Add to scene
        scene.add.existing(this);
    }
}