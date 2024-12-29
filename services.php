<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Pferde Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="services.css">
    <script src="scripts.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'toolbar.php'; ?>

    <div class="content services-content">
        <h1>Unsere Dienstleistungen</h1>
        <div class="service">
            <h2>Anfahrt</h2>
            <p>Wir bieten Anfahrtsdienste zu Ihrem Standort an. Die Kosten hierfür betragen:</p>
            <ul>
                <li>Innerhalb von 10 km: 20€</li>
                <li>10-20 km: 30€</li>
                <li>20-30 km: 40€</li>
                <li>Über 30 km: auf Anfrage</li>
            </ul>
        </div>
        <div class="service">
            <h2>Training pro Stunde</h2>
            <p>Unser Training ist individuell auf die Bedürfnisse Ihres Pferdes abgestimmt. Die Preise sind wie folgt:</p>
            <ul>
                <li>Einzelstunde: 50€</li>
                <li>5er Karte: 225€ (Ersparnis von 25€)</li>
                <li>10er Karte: 400€ (Ersparnis von 100€)</li>
            </ul>
        </div>
        <div class="service">
            <h2>Spezialtraining</h2>
            <p>Für besondere Trainingsanforderungen bieten wir folgende Optionen an:</p>
            <ul>
                <li>Bodenarbeit: 60€ pro Stunde</li>
                <li>Gelassenheitstraining: 70€ pro Stunde</li>
                <li>Verladetraining: 80€ pro Stunde</li>
            </ul>
        </div>
        <div class="service">
            <h2>Beratung und Coaching</h2>
            <p>Wir stehen Ihnen auch für Beratungen und persönliches Coaching zur Verfügung:</p>
            <ul>
                <li>Telefonische Beratung: 30€ pro 30 Minuten</li>
                <li>Vor-Ort-Beratung: 60€ pro Stunde</li>
                <li>Online-Coaching: 50€ pro Stunde</li>
            </ul>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <button id="scrollButton" onclick="scrollToTop()">↑</button>
</body>
</html>
