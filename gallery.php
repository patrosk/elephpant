<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>



<h2><?= get_variable($heading) ?></h2>

<div class="container">
    <div class="box">
        <?php foreach ($monsters as $monster) : ?>

            <?php
            $name = $monster['name'];
            $image = $monster['image']; ?>

            <div class="gallery">
                <div class="name"> <?= $name ?></div>
                <img class="monster_image" src="<?= $image ?>" alt="<?= $name ?>">
            </div>

        <?php endforeach ?>
    </div>
</div>
<div class="tip"><?= get_variable($tip[0]) ?></div>
<?php require __DIR__ . '/php/footer.php'; ?>
