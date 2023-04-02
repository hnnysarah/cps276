<?php

require_once "../classes/Pdo_methods.php";
$pdo = new PdoMethods();

$sql = "SELECT name FROM names ORDER BY name ASC";

if (($pdo->selectNotBinded($sql)) === "error") {
    $response = (object)[
        'masterstatus' => 'error',
        'msg' => 'Could not display data in database'
        ];

    echo json_encode($response);
} else {
    $nameLists = "";
    foreach ($pdo->selectNotBinded($sql) as $name) {
        $nameLists .= '<p>'.implode($name).'</p>';
    } 
    $response = (object)[
        'masterstatus' => 'success',
        'names' => $nameLists
        ];

    echo json_encode($response);
}
?>