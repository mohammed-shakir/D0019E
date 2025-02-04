<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 5 - Servervariabler</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('menu.php'); ?>

    <h1>Sida 5 - Servervariabler</h1>
    <p>Här demonstreras hur man kan använda servervariabler i PHP för att visa information om servern och klienten.</p>

    <?php
    // Servernamn
    echo "<p>Servernamn: " . $_SERVER['SERVER_NAME'] . "</p>";

    // Användarens IP-adress
    echo "<p>Användarens IP-adress: " . $_SERVER['REMOTE_ADDR'] . "</p>";

    // Filnamn på denna sida
    echo "<p>Filnamn: " . $_SERVER['PHP_SELF'] . "</p>";

    // Port på användarens dator
    echo "<p>Port (klientens dator): " . $_SERVER['REMOTE_PORT'] . "</p>";

    // Metod som används (GET/POST)
    echo "<p>Metod: " . $_SERVER['REQUEST_METHOD'] . "</p>";
    ?>

    <?php include('footer.php'); ?>

</body>

</html>