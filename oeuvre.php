<?php

include 'includes/oeuvres.php';
include 'includes/header.php';

$id = $_GET['id'] ?? null;

$foundArtwork = null;

foreach ($oeuvres as $oeuvre) {

    if ($oeuvre['id'] == $id) {
        $foundArtwork = $oeuvre;
        break;
    }
}

if ($foundArtwork === null) {
    http_response_code(404);
    echo "<h1>Œuvre introuvable</h1>";
    exit;
}

?>

<main>

    <article id="detail-oeuvre">

        <div id="img-oeuvre">
            <img
                src="<?php echo $foundArtwork['image']; ?>"
                alt="<?php echo $foundArtwork['titre']; ?>">
        </div>

        <div id="contenu-oeuvre">

            <h1><?php echo $foundArtwork['titre']; ?></h1>

            <p class="description">
                <?php echo $foundArtwork['artiste']; ?>
            </p>

            <p class="description-complete">
                <?php echo $foundArtwork['description']; ?>
            </p>

        </div>

    </article>

</main>

<?php 

include 'includes/footer.php'; 

?>