<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallerie - Pferde Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="gallery.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <?php include 'toolbar.php'; ?>

    <div class="content">
        <h1>Gallerie</h1>
        <div class="gallery">
            <?php
                $dir = 'images/gallery/';
                $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                foreach($images as $image) {
                    echo '<div class="gallery-item">';
                    echo '<img src="' . $image . '" alt="Gallerie Bild" class="gallery-img">';
                    echo '</div>';
                }
            ?>
        </div>
    </div>

    <div id="fullscreen-modal" class="fullscreen-modal">
        <span class="close" onclick="closeFullscreen()">&times;</span>
        <img class="fullscreen-content" id="fullscreen-img">
    </div>

    <?php include 'footer.php'; ?>

    <button id="scrollButton" onclick="scrollToTop()">↑</button>
</body>
</html>
