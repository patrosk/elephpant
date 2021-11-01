<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>


<h2>Monsters in Greek Mythology</h2>

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


<?php require __DIR__ . '/php/footer.php'; ?>
