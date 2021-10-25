<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/monsters.php' ?>


<h2>Monsters in Greek Mythology</h2>

<div class="container">
    <div class="box">
        <?php foreach ($monsters as $monster) : ?>

            <?php
            $name = $monster['name'];
            $location = $monster['location'];
            $creature = $monster['creature'];
            $powers = $monster['powers'];
            $weakness = $monster['weakness'];
            $slain_by = $monster['slain_by'];
            $image = $monster['image'];
            $story =  $monster['story'] ?>

            <div class="information">
                <div class="name"> <?php echo $name ?></div>
                <img class="monster_image" src="<?php echo $image ?>">
                <ul class>
                    <li>Creature: <?php echo $creature ?></li>
                    <li>Location: <?php echo $location ?></li>
                    <li>Powers: <?php echo $powers ?></li>
                    <li>Weakness: <?php echo $weakness ?></li>
                    <li>Slain By: <?php echo $slain_by ?></li>
                </ul>

                <div class="story">
                    <div><?php echo $story ?></div>
                </div>

            </div>

        <?php endforeach ?>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>
