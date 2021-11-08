<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>

<h2>About the Monsters</h2>

<form action="about.php" method="GET" id="sorting">
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

            <div class="information" id="about">
                <div class="information_about">
                    <div class="name"> <?= $monster['name'] ?></div>
                    <img class="monster_image" src="<?= $monster['image'] ?>" alt="<?= $monster['alt_text'] ?>">
                </div>
                <ul class>
                    <li>Creature:<p><?= $monster['creature'] ?>
                        <p>
                    </li>
                    <li>Location: <p><?= $monster['location'] ?></p>
                    </li>
                    <li>Powers: <p><?= $monster['powers'] ?></p>
                    </li>
                    <li>Weakness: <p><?= $monster['weakness'] ?></p>
                    </li>
                    <li>Slain By: <p><?= $monster['slain_by'] ?></p>
                    </li>
                </ul>
            </div>
        <?php endif ?>
    </div>
</div>
<div class="tip"><?= $tip[0] ?></div>
<?php require __DIR__ . '/php/footer.php'; ?>
