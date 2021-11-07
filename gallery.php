<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>



<h2><?= $heading ?></h2>

<div class="container">
    <div class="box">
        <?php foreach ($monsters as $monster) : ?>

            <?php
            $name = $monster['name'];
            $image = $monster['image'];
            $alt = $monster['alt-text']; ?>

            <div class="gallery">
                <div class="name"> <?= $name ?></div>
                <img class="monster_image" src="<?= $image ?>" alt="<?= $alt ?>">
            </div>

        <?php endforeach ?>
    </div>
</div>
<div class="tip"><?= $tip[0] ?></div>
<?php require __DIR__ . '/php/footer.php'; ?>
