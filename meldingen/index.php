<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>
    
    <div class="container">
        <h1>Meldingen</h1>
        <a href="create.php">Nieuwe melding &gt;</a>

        <?php if(isset($_GET['re']))
        {
            $response = "Error retrieving response code";
            switch($_GET['re']){
                case "0":
                    $response = "Melding verstuurd";
                break;
                case "1":
                    $response = "Error sending report";
                break;
            }
            echo "<div class='msg'>" . $response . "</div>";
        } ?>

        <div style="height: 300px; background: #ededed; display: flex; justify-content: center; align-items: center; color: #666666;">(hier komen de storingsmeldingen)</div>
    </div>  

</body>

</html>
