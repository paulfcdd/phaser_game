var game = new Phaser.Game(800, 600, Phaser.AUTO, '', {preload: preload, create: create, update: update}),
    platforms,
    player,
    stars,
    score = 0,
    scoreText,
    totalStars = 0;

function preload() {
    game.load.image('sky', '../src/test/sky.png');
    game.load.image('ground', '../src/test/platform.png');
    game.load.image('star', '../src/test/star.png');
    game.load.spritesheet('dude', '../src/test/dude.png', 32, 48);
}


function create() {
    //Enabling Arcade physics system
    game.physics.startSystem(Phaser.Physics.ARCADE);
    //Set background
    game.add.sprite(0, 0, 'sky');
    //Creating group for ledges
    platforms = game.add.group();
    //Enable physics for each object in group
    platforms.enableBody = true;
    //Creating a ground for jumping
    var ground = platforms.create(0, game.world.height - 64, 'ground');
    //  Scale it to fit the width of the game (the original sprite is 400x32 in size)
    ground.scale.setTo(2, 2);
    //  This stops it from falling away when you jump on it
    ground.body.immovable = true;
    //  Now let's create two ledges
    var ledge = platforms.create(400, 400, 'ground');
    ledge.body.immovable = true;
    ledge = platforms.create(-150, 250, 'ground');
    ledge.body.immovable = true;

    //Player and it settings
    player = game.add.sprite(32, game.world.height - 150, 'dude');
    game.physics.arcade.enable(player);

    //Player physics props
    //высота подпрыгивания
    player.body.bounce.y = 0.2;
    //скороть падения
    player.body.gravity.y = 300;
    player.body.collideWorldBounds = true;

    //  Our two animations, walking left and right.
    player.animations.add('left', [0, 1, 2, 3], 10, true);
    player.animations.add('right', [5, 6, 7, 8], 10, true);

    stars = game.add.group();
    stars.enableBody = true;
    for (var i = 0; i < 12; i++) {
        var star = stars.create(i * 70, 0, 'star');
        star.body.gravity.y = 100;
        star.body.bounce.y = 0.7 + Math.random() * 0.2;
    }

    scoreText = game.add.text(16, 16, 'score: 0', {
        fontSize: '32px',
        fill: '#000'
    });
}

function update() {
    var cursors = game.input.keyboard.createCursorKeys();

    game.physics.arcade.collide(player, platforms);
    game.physics.arcade.collide(stars, platforms);
    game.physics.arcade.overlap(player, stars, collectStar, null, this);

    player.body.velocity.x = 0;

    if (cursors.left.isDown) {
        player.body.velocity.x = -150;
        player.animations.play('left');
    } else if (cursors.right.isDown) {
        player.body.velocity.x = 150;
        player.animations.play('right');
    }
    else {
        player.animations.stop();
        player.frame = 4;
    }

    if (cursors.up.isDown && player.body.touching.down) {
        player.body.velocity.y = -350;
    }

    if (cursors.down.isDown && !player.body.touching.down) {
        player.body.velocity.y = 350;
    }
}

function collectStar(player, star) {
    totalStars = stars.length;
    star.kill();
    score += 1;
    scoreText.text = 'Score: ' + score;
    if (score === totalStars) {
        alert('kek')
    }
}
