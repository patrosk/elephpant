<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/monsters.php' ?>

<h1>What is a monster?</h1>
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
            $slain_by = $monster['slain_by']; ?>

            <div class="information">
                <div class="name"> <?php echo $monster['name'] ?></div>
                <img src="<?php echo $monster['image'] ?>">
                <ul class>
                    <li>Creature: <?php echo $monster['creature'] ?></li>
                    <li>Location: <?php echo $monster['location'] ?></li>
                    <li>Powers: <?php echo $monster['powers'] ?></li>
                    <li>Weakness: <?php echo $monster['weakness'] ?></li>
                    <li>Slain By: <?php echo $monster['slain_by'] ?></li>
                </ul>

                <div class="story">
                    <div><?php echo $monster['story'] ?></div>
                </div>

            </div>

        <?php endforeach ?>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>
