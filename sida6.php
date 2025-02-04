<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 6 - Ta emot data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('menu.php'); ?>

    <h1>Sida 6 - Ta emot data</h1>
    <p>Den här PHP-sidan tar emot data antingen via GET eller POST från sida6.html.</p>

    <?php
    // Kolla om vi har GET-variabler
    if (isset($_GET['namnGet']) || isset($_GET['telGet'])) {
        $namnGet = $_GET['namnGet'] ?? '(saknas)';
        $telGet  = $_GET['telGet'] ?? '(saknas)';
        echo "<p><strong>Formulär (GET)</strong></p>";
        echo "<p>Namn: $namnGet</p>";
        echo "<p>Telefon: $telGet</p>";
        echo "<hr>";
    }

    // Kolla om vi har POST-variabler
    if (isset($_POST['namnPost']) || isset($_POST['telPost'])) {
        $namnPost = $_POST['namnPost'] ?? '(saknas)';
        $telPost  = $_POST['telPost'] ?? '(saknas)';
        echo "<p><strong>Formulär (POST)</strong></p>";
        echo "<p>Namn: $namnPost</p>";
        echo "<p>Telefon: $telPost</p>";
        echo "<hr>";
    }
    ?>

    <?php include('footer.php'); ?>

</body>

</html>