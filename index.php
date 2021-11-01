<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>


<h2><?= get_h2() ?></h2>

<div class="container">
    <div class="box">
        <img class="akropolis_small" src="/img/akropolis.jpeg" alt="Akropolis in golden light">
        <article class="definition"> <?= $monster_definition[0] ?>
        </article>
        <article class="definition"> <?= $monster_definition[1] ?>
        </article>
        <article class="question">
            What really is a monster?
        </article>
        <img class="akropolis_large" src="/img/akropolis.jpeg" alt="Akropolis in golden light">
    </div>
</div>

<div class="tip"><?= tip() ?></div>
<?php require __DIR__ . '/php/footer.php'; ?>
