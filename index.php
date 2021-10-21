<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/monsters.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>

<main>
    <h1>What is a monster?</h1>
    <h2>Monsters in Greek Mythology</h2>
    <div class="container one">
        <?php foreach ($monsters as $monster) : ?>
            <div>
                <div class="name">
                    <h3><?php echo $monster['name'] . "\n" ?></h3>
                    <img src="<?php echo $monster['image'] ?>">
                </div>
            </div>
            <div>
                <div class="evil">
                    AM I EVIL?
                    <div class="story">
                        INSERT STORY HERE
                    </div>
                </div>
                <div class="info">
                    <div class="stats">
                        <div>Creature: <?php echo $monster['creature'] ?></div>
                        <div>Location: <?php echo $monster['location'] ?></div>
                        <div>Powers: <?php echo $monster['powers'] ?></div>
                        <div>Weakness: <?php echo $monster['weakness'] ?></div>
                        <div>Slain By: <?php echo $monster['slain_by'] ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>
