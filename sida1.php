<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 1 - Stränghantering</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('menu.php'); ?>
    <h1>Sida 1 - Stränghantering</h1>
    <p>Den här sidan demonstrerar hur man skriver ut text med PHP och hur man kan manipulera strängar.</p>

    <?php
    // Utskrift med PHP
    echo "<p>Denna text är genererad med utskriftskommandot i PHP.</p>";
    ?>

    <!-- Formulär för att skicka in ett namn -->
    <form action="sida1.php" method="POST">
        <label for="name">Ange ett namn:</label>
        <input type="text" id="name" name="name">
        <button type="submit" name="submitName">Skicka</button>
    </form>

    <?php
    // Kolla om formuläret är skickat
    if (isset($_POST['submitName'])) {
        // Läs in namnet
        $strName = $_POST['name'];

        // Om inget namn angavs, använd ett standardnamn
        if (empty($strName)) {
            $strName = "Mohammed Shakir";
        }

        // Gör utskrifter
        echo "<p>Hej $strName</p>";
        echo "<p>Baklänges: " . strrev($strName) . "</p>";
        echo "<p>Gemener: " . strtolower($strName) . "</p>";
        echo "<p>Versaler: " . strtoupper($strName) . "</p>";
        echo "<p>Antal tecken: " . strlen($strName) . "</p>";
    }
    ?>

    <?php include("footer.php"); ?>

</body>

</html>