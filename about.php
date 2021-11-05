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
        <?php if (isset($_GET['sorting'])) {
            foreach ($monsters as $monster) {

                $name = $monster['name'];
                $location = $monster['location'];
                $creature = $monster['creature'];
                $powers = $monster['powers'];
                $weakness = $monster['weakness'];
                $slain_by = $monster['slain_by'];
                $image = $monster['image'];

                if ($_GET['sorting'] === $name) { ?>
                    <div class="information" id="about">
                        <div class="information_about">
                            <div class="name"> <?= $name ?></div>
                            <img class="monster_image" src="<?= $image ?>" alt="<?= $name ?>">
                        </div>
                        <ul class>
                            <li>Creature:<p><?= $creature ?>
                                <p>
                            </li>
                            <li>Location: <p><?= $location ?></p>
                            </li>
                            <li>Powers: <p><?= $powers ?></p>
                            </li>
                            <li>Weakness: <p><?= $weakness ?></p>
                            </li>
                            <li>Slain By: <p><?= $slain_by ?></p>
                            </li>
                        </ul>
                    </div>
        <?php }
            }
        } ?>
    </div>
</div>
<div class="tip"><?= get_variable($tip[0]) ?></div>
<?php require __DIR__ . '/php/footer.php'; ?>
