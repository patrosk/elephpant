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
            foreach ($monsters as $monster) :

                $name = $monster['name'];
                $image = $monster['image'];
                $story = $monster['story'];

                if ($_GET['sorting'] === $name) : ?>
                    <div class="information" id="story">
                        <div class="stats">
                            <div class="name"> <?= $name ?></div>
                            <img class="monster_image" src="<?= $image ?>" alt="<?= $name ?>">
                        </div>
                        <?php foreach ($story as $paragraph) : ?>
                            <article class="story">
                                <?= $paragraph ?>
                            </article>
                        <?php endforeach ?>
                    </div>
        <?php endif;
            endforeach;
        endif;
        ?>
    </div>
</div>
<div class="tip"><?= tip() ?></div>
<?php require __DIR__ . '/php/footer.php'; ?>
