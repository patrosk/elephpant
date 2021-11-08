<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/randomstory.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>

<h2>Stories from Greek Mythology</h2>

<div class="container">
    <div class="box">
        <?php $story = get_random_story($stories); ?>
        <img class="akropolis_small" src="<?= $story['image'] ?>" alt="<?= $story['alt_text'] ?>">
        <div class="alt_small"><?= $story['painting'] ?></div>
        <h3><?= $story['title'] ?></h3>
        <?php foreach ($story['story'] as $paragraph) : ?>
            <article class="definition"> <?= $paragraph ?></article>
        <?php endforeach ?>
        <img class="akropolis_large" src="<?= $story['image'] ?>" alt="<?= $story['alt_text'] ?>">
        <div class="alt_large"><?= $story['painting'] ?></div>
    </div>
</div>
<div class="tip"><?= $tip[1] ?></div>

<?php require __DIR__ . '/php/footer.php'; ?>
