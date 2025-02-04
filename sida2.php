<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 2 - Arrayer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('menu.php'); ?>
    <h1>Sida 2 - Arrayer</h1>
    <p>Den här sidan demonstrerar hur man kan hantera arrayer i PHP.</p>

    <!-- Formulär för att skicka in tre djur -->
    <form action="sida2.php" method="POST">
        <label for="animal1">Djur 1:</label>
        <input type="text" id="animal1" name="animal1">

        <label for="animal2">Djur 2:</label>
        <input type="text" id="animal2" name="animal2">

        <label for="animal3">Djur 3:</label>
        <input type="text" id="animal3" name="animal3">

        <button type="submit" name="submitAnimals">Skicka</button>
    </form>

    <?php
    if (isset($_POST['submitAnimals'])) {
        // Skapa arrayen och lägg in de tre djuren
        $farmAnimals = array();
        $farmAnimals[0] = $_POST['animal1'] ?? "";
        $farmAnimals[1] = $_POST['animal2'] ?? "";
        $farmAnimals[2] = $_POST['animal3'] ?? "";

        // Skriv ut arrayen i råformat
        echo "<pre>";
        print_r($farmAnimals);
        echo "</pre>";

        // Ersätt djuret på tredje platsen med "Struts"
        $farmAnimals[2] = "Struts";
        // Lägg till djuret "Alpacka" sist
        $farmAnimals[] = "Alpacka";
        // Ta bort första elementet (index 0)
        array_shift($farmAnimals);

        // Skriv ut arrayen igen i råformat
        echo "<pre>";
        print_r($farmAnimals);
        echo "</pre>";

        // Skriv ut det andra elementet i arrayen (index 1)
        echo "<p>Det andra djuret i arrayen är: {$farmAnimals[1]}</p>";
    }
    ?>

    <?php include("footer.php"); ?>

</body>

</html>