<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/monsters.php' ?>


<h2>Monsters in Greek Mythology</h2>

<div class="container">
    <div class="box">
        <?php foreach ($monsters as $monster) : ?>

            <?php
            $name = $monster['name'];
            $image = $monster['image']; ?>

            <div class="gallery">
                <div class="name"> <?php echo $name ?></div>
                <div class="read_more"><a href="">Read more</a></div>
                <img class="monster_image" src="<?php echo $image ?>">
            </div>

        <?php endforeach ?>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>
