<?php
    include __DIR__ . '/partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>
</head>
<body>
    <header>

    </header>

    <main>

        <?php 
            foreach($database as $album){
                echo "<p>" . $album['title'] . "</p>";
                echo "<p>" . $album['author'] . "</p>";
                echo "<p>" . $album['year'] . "</p>";
                echo "<p>" . $album['genre'] . "</p>";
                echo "<img src='" . $album['poster'] . "'>";
            }
        ?>

    </main>
</body>
</html>