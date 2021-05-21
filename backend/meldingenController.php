<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];
$type = $_POST['type'];
$priority = isset($_POST['prio']);
$extra = $_POST['extra'];

$typeoptions = {"achtbaan", "draaiend", "kinder", "horeca", "show", "water", "overig"};
if(!in_array($type, $typeoptions) || !is_numeric($capaciteit)){
    die("verkeerde variablen");
}

//echo $attractie . " / " . $capaciteit . " / " . $melder . " / " . $type . " / " . $priority . " / " . $extra;

//1. Verbinding
require_once 'conn.php';

//2. Query
switch($_POST['action']){
    case "update":
        
        break;
    default:
        $query = "INSERT INTO meldingen(attractie, capaciteit, melder, type, prioriteit, overige_info) VALUES(:attractie, :capaciteit, :melder, :type, :priority, :extra)";
        break;
}


//3. Prepare
$statement = $conn->prepare($query);

//4. Execute
$statement->execute([
    ":attractie" => $attractie,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":type" => $type,
    ":priority" => $priority,
    ":extra" => $extra
]);

header("Location: ../meldingen/index.php?re=0");

