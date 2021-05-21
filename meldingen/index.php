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

        <div>
            <table>
            <tr>
            <th>ID</th>
            <th>Attractie</th>
            <th>Capaciteit</th>
            <th>Type</th>
            <th>Melder</th>
            <th>Prioriteit</th>
            <th>Gemeld op</th>
            <th>Aanpassen</th>
            </tr>
            <?php 
                require_once("../backend/conn.php");
                $query = "SELECT * FROM meldingen";
                $statement = $conn->prepare($query);
                $statement->execute();
                $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach($meldingen as $melding){
                    echo "<tr>";
                    echo "<td>" . $melding["id"] . "</td>";
                    echo "<td>" . $melding["attractie"] . "</td>";
                    echo "<td>" . $melding["capaciteit"] . "</td>";
                    echo "<td>" . $melding["type"] . "</td>";
                    echo "<td>" . $melding["melder"] . "</td>";
                    echo "<td>" . $melding["prioriteit"] . "</td>";
                    echo "<td>" . $melding["gemeld_op"] . "</td>";
                    echo "<td><a href=" . "edit.php?id=" . $melding["id"] . ">Aanpassen<a></td>";
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
    </div>  

</body>

</html>
