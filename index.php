<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/monsters.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>

<main>
    <h1>What is a monster?</h1>
    <h2>Monsters in Greek Mythology</h2>
    <div class="container">
        <?php getMonsters($monsters) ?>
    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>
