<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$melder = $_POST['melder'];


//verbinding maken
require_once '../../../config/conn.php';
//query
$query = "INSERT INTO meldingen (attractie, capaciteit, melder)
VALUES (:attractie, :capaciteit, :melder)";
//prepare
$statement = $conn->prepare($query);
//execute
$statement->execute([
    ":attractie" => $attractie,
    ":capaciteit" => $capaciteit,   
    ":melder" => $melder,
]);

header("Location: ../../../resources/views/meldingen/index.php?msg=Melding Opgeslagen");


