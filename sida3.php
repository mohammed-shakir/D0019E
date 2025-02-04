<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 3 - Loopar och Villkor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('menu.php'); ?>
    <h1>Sida 3 - Loopar och villkorssatser</h1>
    <p>Den här sidan demonstrerar hur man kan loopa igenom en array och använda villkorssatser för att hitta ett sökord.</p>

    <!-- Formulär för att skicka in ord -->
    <form action="sida3.php" method="POST">
        <label for="words">Skriv in ord (separera med mellanslag):</label><br>
        <textarea name="words" id="words" rows="3" cols="50"></textarea><br><br>

        <label for="search">Sökord:</label>
        <input type="text" name="search" id="search"><br><br>

        <button type="submit" name="submitSearch">Sök</button>
    </form>

    <?php
    if (isset($_POST['submitSearch'])) {
        // 1. Hämta hela strängen från textfältet
        $wordsString = $_POST['words'] ?? '';
        // 2. Gör om till en array baserat på mellanslag
        $wordsArray = explode(" ", $wordsString);

        // 3. Hämta sökordet
        $searchWord = $_POST['search'] ?? '';

        // 4. Skriv ut arrayen i råformat
        echo "<pre>";
        print_r($wordsArray);
        echo "</pre>";

        // 5. Leta efter sökordet i arrayen
        $positions = array();  // här sparar vi hittade positioner
        for ($i = 0; $i < count($wordsArray); $i++) {
            // Jämför ordet i arrayen med sökordet
            if ($wordsArray[$i] === $searchWord) {
                // Spara position
                $positions[] = $i + 1;
            }
        }

        // 6. Skriv ut resultat
        if (!empty($positions)) {
            echo "<p>Ordet '{$searchWord}' finns på plats: " . implode(" ", $positions) . "</p>";
            echo "<p>Ordet '{$searchWord}' hittades " . count($positions) . " gånger.</p>";
        } else {
            echo "<p>Ordet '{$searchWord}' hittades inte i listan.</p>";
        }
    }
    ?>

    <?php include("footer.php"); ?>

</body>

</html>