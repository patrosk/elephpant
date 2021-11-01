<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/monsters.php' ?>
<?php require __DIR__ . '/php/randomstory.php' ?>
<?php require __DIR__ . '/php/functions.php' ?>

<h2>Stories from Greek Mythology</h2>

<div class="container">
    <div class="box">
        <img class="akropolis_small" src="/img/akropolis.jpeg">
        <article class=""> <?php echo $stories[0]['story'][0] ?>
        </article>
        <article class=""> <?php  ?>
        </article>
        <article class="question">
            What really is a monster?
        </article>
        <img class="akropolis_large" src="/img/akropolis.jpeg">
    </div>
</div>


<?php require __DIR__ . '/php/footer.php'; ?>
