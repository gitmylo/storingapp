<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Rounding</title>
    <?php require_once 'head.php'; ?>
</head>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container">
        <?php $average = 5.10183996;
            echo round($average);
            echo "<br/>";
            echo round($average, 1);
            echo "<br/>";
            echo round($average, 3);
        ?>
    </div>  

</body>

</html>
