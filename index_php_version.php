<?php
    include __DIR__ . '/partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Dischi PHP</title>
</head>
<body>
    
    <header class="d-flex justify-content-end align-items-center px-5">

        <select name="Select genre" id="select">
                <option>Valore 1</option>
        </select>
        
    </header>

    <main class="container">
       
        <div class="row">

            <?php

                foreach($database as $album){

                    echo "<div class='card'>";

                        echo "<img class='card-img-top' src='" . $album['poster'] . "'>";

                        echo "<div class='card-body'>";

                            echo "<h5 class='card-title title'>" . $album['title'] . "</h5>";
                            echo "<p class='card-text'>" . $album['author'] . "</p>";
                            echo "<p class='card-text'>" . $album['year'] . "</p>";
                            
                        echo "</div>";

                    echo "</div>";

                }
            ?>
            

        </div>

    </main>
</body>
</html>