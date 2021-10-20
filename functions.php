<?php

require __DIR__ . '/monsters.php';

function getMonsters($array)
{
    foreach ($array as $monster) : ?>
        <div>
            <div class="name">
                <img src="<?php echo $monster['image'] ?>">
                <h3><?php echo $monster['name'] . "\n" ?></h3>
            </div>
        </div>
        <div class="info">
            <div class="stats">
                <div>Location: <?php echo $monster['info']['location'] ?></div>
                <div>Creature: <?php echo $monster['info']['creature'] ?></div>
                <div>Powers: <?php echo $monster['info']['powers'] ?></div>
                <div>Weakness: <?php echo $monster['info']['weakness'] ?></div>
                <div>Slain By: <?php echo $monster['info']['slain by'] ?></div>
            </div>
            <div class="story">
                <p>INSERT INFO/ STORY HERE</p>
            </div>
        </div>
<?php endforeach;
};
