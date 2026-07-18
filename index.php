<?php

include 'includes/oeuvres.php';
include 'includes/header.php';

?>
<main>
    <div id="liste-oeuvres">
        
        <?php foreach ($oeuvres as $oeuvre) : ?>

            <article class="oeuvre">

                <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">

                    <img
                        src="<?php echo $oeuvre['image']; ?>"
                        alt="<?php echo $oeuvre['titre']; ?>">
                    <h2><?php echo $oeuvre['titre']; ?></h2>
                    <p><?php echo $oeuvre['artiste']; ?></p>
                </a>

            </article>

        <?php endforeach; ?>

    </div>

</main>

<?php

include 'includes/footer.php';

?>