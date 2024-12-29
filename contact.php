<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - Pferde Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">
    <script src="scripts.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'toolbar.php'; ?>

    <div class="content contact-content">
        <div class="contact-text">
            <h1>Kontakt</h1>
            <h2>Name</h2>
            <p>John Doe</p>
            <h2>Email</h2>
            <p><a href="mailto:john.doe@example.com">john.doe@example.com</a></p>
            <h2>Telefon</h2>
            <p>+49 123 456 789</p>
            <h2>Adresse</h2>
            <p>Musterstraße 1<br>12345 Musterstadt<br>Deutschland</p>
            <h2>Social Media</h2>
            <p>
                <a href="https://www.facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            </p>
        </div>
        <div class="contact-image">
            <img src="images/contact.jpg" alt="John Doe">
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <button id="scrollButton" onclick="scrollToTop()">↑</button>
</body>
</html>
