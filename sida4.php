<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 4 - Funktioner</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('menu.php'); ?>
    <h1>Sida 4 - Funktioner</h1>
    <p>Den här sidan demonstrerar hur man skapar och anropar funktioner i PHP för att beräkna omkrets och area av en rektangel.</p>

    <?php

    // Returnerar arean av en rektangel.
    function calculateArea($length, $width)
    {
        return $length * $width;
    }

    // Skriver ut omkretsen av en rektangel
    function calculateCircumference($length, $width)
    {
        // Omkrets = 2 * (längd + bredd)
        $circumference = 2 * ($length + $width);

        // Anropa calculateArea
        $area = calculateArea($length, $width);

        // Skriver ut resultaten
        echo "<p>Omkretsen är: $circumference</p>";
        echo "<p>Arean är: $area</p>";
    }
    ?>

    <!-- Formulär för att skicka in längd och bredd -->
    <form action="sida4.php" method="POST">
        <label for="length">Längd:</label>
        <input type="number" name="length" id="length" step="0.1">

        <label for="width">Bredd:</label>
        <input type="number" name="width" id="width" step="0.1">

        <button type="submit" name="calc">Beräkna</button>
    </form>

    <?php
    // Kolla om formuläret är skickat
    if (isset($_POST['calc'])) {
        // Hämta värden
        $length = $_POST['length'] ?? 0;
        $width = $_POST['width'] ?? 0;

        // Säkerställ att vi har giltiga siffror
        if ($length > 0 && $width > 0) {
            calculateCircumference($length, $width);
        } else {
            echo "<p>Var vänlig ange giltiga värden för längd och bredd.</p>";
        }
    }
    ?>

    <?php include("footer.php"); ?>

</body>

</html>