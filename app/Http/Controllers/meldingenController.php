<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$melder = $_POST['melder'];

echo $attractie . " / " . $capaciteit . " / " . $melder;

//verbinding maken
require_once '../../../config/conn.php';
//query
$query = "INSERT TO meldingen (attractie, capaciteit, melder)
VALUES(:attractie, :capaciteit, :melder)";
//prepare
$statement = $conn->prepare($query);
//execute
$statement->execute([
    ":attractie" => $attractie,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
]);

$items = $statement->fetchAll(PDO::FETCH_ASSOC);

