var width = 1000,
    height = 600,
    renderer = Phaser.AUTO,
    domId = '',
    object = {
        preload: preload,
        create: create,
        update: update
    },
    houses,
    castle_base,
    castle_with_facade,
    castle_facade,
    castle_roof,
    castle_ready,
    castle_walls,
    castle_with_walls,
    castle_window,
    castle_doors,
    castle_with_windows,
    castle_with_doors,
    castle_equipment_commode,
    castle_equipment_chair,
    castle_equipment_lamp,
    castle_equipment_mirror,
    castle_equipment_bed,
    castle_equipment_pic_1,
    castle_equipment_pic_2,
    castle_equipment_hearth,
    castle_equipment_table,
    castle_equipment,
    game = new Phaser.Game(width, height, renderer, domId, object);

function preload() {

    //load background
    game.load.image('bg', '../src/house/bg.png');

    //castle views
    game.load.image('castle_base', '../src/house/base/1.png');
    game.load.image('castle_with_facade', '../src/house/base/2.png');
    game.load.image('castle_ready', '../src/house/base/3.png');
    game.load.image('castle_with_walls', '../src/house/base/4.png');
    game.load.image('castle_with_windows', '../src/house/base/5.png');
    game.load.image('castle_with_doors', '../src/house/base/6.png');

    //castle elements
    game.load.image('castle_facade', '../src/house/elewacja_dach/elewacja_dom1.png');
    game.load.image('castle_walls', '../src/house/sciany/sciany_dom1.png');
    game.load.image('castle_roof', '../src/house/elewacja_dach/dach_dom1.png');
    game.load.image('castle_window', '../src/house/okna_drzwi/okno_dom1.png');
    game.load.image('castle_doors', '../src/house/okna_drzwi/drzwi_dom1.png');

    //castle equipment
    game.load.image('castle_equipment_commode', '../src/house/meble/komoda_zamek.png');
    game.load.image('castle_equipment_chair', '../src/house/meble/krzeslo_zamek.png');
    game.load.image('castle_equipment_lamp', '../src/house/meble/lampa_zamek.png');
    game.load.image('castle_equipment_mirror', '../src/house/meble/lustro.png');
    game.load.image('castle_equipment_bed', '../src/house/meble/lozko_zamek.png');
    game.load.image('castle_equipment_pic_1', '../src/house/meble/obraz_1.png');
    game.load.image('castle_equipment_pic_2', '../src/house/meble/obraz_2.png');
    game.load.image('castle_equipment_hearth', '../src/house/meble/palenisko.png');
    game.load.image('castle_equipment_table', '../src/house/meble/stol_1.png');
}

function create() {

    game.physics.startSystem(Phaser.Physics.ARCADE);
    game.add.sprite(0, 0, 'bg');

    houses = game.add.group();
    houses.enableBody = true;

    castle_base = houses.create(250, game.world.height - 350, 'castle_base');
    castle_base.body.immovable = true;

    castle_facade = game.add.sprite(50, 50, 'castle_facade');
    castle_facade.inputEnabled = true;
    castle_facade.anchor.set(0.5);
    castle_facade.input.enableDrag();

    castle_roof = game.add.sprite(120, 50, 'castle_roof');
    castle_roof.inputEnabled = true;
    castle_roof.anchor.set(0.5);
    castle_roof.input.enableDrag();

    castle_walls = game.add.sprite(50, 120, 'castle_walls');
    castle_walls.inputEnabled = true;
    castle_walls.anchor.set(0.5);
    castle_walls.input.enableDrag();


    castle_window = game.add.sprite(50, 190, 'castle_window');
    castle_window.inputEnabled = true;
    castle_window.anchor.set(0.5);
    castle_window.input.enableDrag();

    castle_doors = game.add.sprite(120, 170, 'castle_doors');
    castle_doors.inputEnabled = true;
    castle_doors.anchor.set(0.5);
    castle_doors.input.enableDrag();

    castle_equipment = game.add.group();
    castle_equipment.inputEnableChildren = true;

    castle_equipment.create(450, 40, 'castle_equipment_commode');
    castle_equipment.create(510, 40, 'castle_equipment_chair');
    castle_equipment.create(550, 40, 'castle_equipment_lamp');


}

function update() {


    if (checkOverlap(castle_facade, castle_base)) {
        castle_with_facade = houses.create(250, game.world.height - 350, 'castle_with_facade');
        castle_facade.x = 50;
        castle_facade.y = 50;
        castle_facade.inputEnabled = false;
        castle_facade.input.disableDrag();
    }

    if (checkOverlap(castle_roof, castle_base)) {
        if (typeof castle_with_facade === 'undefined') {
            console.log('place walls!');
        } else {
            castle_ready = houses.create(250, game.world.height - 565, 'castle_ready');
            castle_roof.x = 120;
            castle_roof.y = 50;
            castle_roof.inputEnabled = false;
            castle_roof.input.disableDrag();
        }
    }

    if (checkOverlap(castle_walls, castle_base)) {
        if (typeof castle_ready === 'undefined') {
            console.log('place roof and walls!');
        } else {
            castle_with_walls = houses.create(250, game.world.height - 565, 'castle_with_walls');
            castle_walls.x = 50;
            castle_walls.y = 120;
            castle_walls.inputEnabled = false;
            castle_walls.input.disableDrag();
        }
    }

    if (checkOverlap(castle_window, castle_base)) {
        if (typeof castle_ready === 'undefined') {
            console.log('place roof and walls!');
        } else {
            castle_with_windows = houses.create(250, game.world.height - 565, 'castle_with_windows');
            castle_window.x = 50;
            castle_window.y = 190;
            castle_window.inputEnabled = false;
            castle_window.input.disableDrag();
        }
    }

    if (checkOverlap(castle_doors, castle_base)) {
        if (typeof castle_with_windows === 'undefined') {
            console.log('place roof and walls!');
        } else {
            castle_with_doors = houses.create(250, game.world.height - 565, 'castle_with_doors');
            castle_doors.x = 120;
            castle_doors.y = 170;
            castle_doors.inputEnabled = false;
            castle_doors.input.disableDrag();
        }
    }
}


function checkOverlap(spriteA, spriteB) {

    var boundsA = spriteA.getBounds();
    var boundsB = spriteB.getBounds();

    return Phaser.Rectangle.intersects(boundsA, boundsB);

}

function buildEquipmentList(x_pos, y_pos, x_pos_step, y_pos_step) {

}