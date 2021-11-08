<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>

<h2>Are they evil?</h2>

<form action="evil.php" method="GET" id="sorting">
    <label for="Monster">Monster: </label>
    <select name="sorting" id="sorting">
        <option value="">Select...</option>
        <?php foreach ($monsters as $monster) : ?>
            <option value="<?= $monster['name'] ?>"><?= $monster['name'] ?></option>
        <?php endforeach ?>
    </select>
    <button type="submit">Show me!</button>
</form>

<div class="container">
    <div class="box">
        <?php if (isset($_GET['sorting'])) :
            $monster = get_monster($monsters) ?>
            <div class="information" id="story">
                <div class="stats">
                    <div class="name"> <?= $monster['name'] ?></div>
                    <img class="monster_image" src="<?= $monster['image'] ?>" alt="<?= $monster['alt_text'] ?>">
                </div>
                <?php foreach ($monster['story'] as $paragraph) : ?>
                    <article class="story">
                        <?= $paragraph ?>
                    </article>
                <?php endforeach ?>
            </div>
    </div>
<?php endif ?>
</div>
<div class="tip"><?= $tip[0] ?></div>
<?php require __DIR__ . '/php/footer.php'; ?>
