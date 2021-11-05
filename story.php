<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/randomstory.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>

<h2>Stories from Greek Mythology</h2>

<div class="container">
    <div class="box">
        <?php

        $i = rand(0, 3);
        $title = $stories[$i]['title'];
        $image = $stories[$i]['image'];
        $painting = $stories[$i]['painting'];
        $alt = $stories[$i]['alt_text'];
        $story = $stories[$i]['story'];

        ?>

        <img class="akropolis_small" src="<?= $image ?>" alt="<?= $alt ?>">
        <div class="alt_small"><?= $painting ?></div>
        <h3><?= $title ?></h3>
        <?php foreach ($story as $paragraph) : ?>
            <article class="definition"> <?= $paragraph ?></article>
        <?php endforeach ?>
        <img class="akropolis_large" src="<?= $image ?>" alt="<?= $alt ?>">
        <div class="alt_large"><?= $painting ?></div>
    </div>
</div>
<div class="tip"><?= get_variable($tip[1]) ?></div>

<?php require __DIR__ . '/php/footer.php'; ?>
