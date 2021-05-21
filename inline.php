<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De krant</title>
</head>
<body>
    <?php
        $title = "Brandweer redt kat uit boom";
        $date = "1 feb 2021";
        $contents = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellendus sed tenetur dignissimos, totam minima aspernatur suscipit sapiente eveniet asperiores labore corrupti maxime hic aliquam fugiat deleniti recusandae quibusdam pariatur.";
        $author = "Milan Schellekens";
    ?>

    <h1><?php echo $title; ?></h1>
    <p><em>Datum: <?php echo $date;?></em></p>
    <p><em>Auteur: <?php echo $author;?></em></p>
    <p><?php echo $contents;?></p>
</body>
</html>