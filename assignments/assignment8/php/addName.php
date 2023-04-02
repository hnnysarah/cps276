<?php

require_once "../classes/Pdo_methods.php";
$pdo = new PdoMethods();

$data = json_decode($_POST['data']);
$name = $data->name;
$arr = explode(" ", $name);
$newName = $arr[1] . ", " . $arr[0];

$sql = "INSERT INTO names (name) VALUES (:name)";

$databinding = [
    [':name', $newName, 'str']
];


if  (($pdo->otherBinded($sql,$databinding)) === "error") {
    $response = (object)[
        'masterstatus' => 'error',
        'msg' => 'Could not insert data into database'
        ];

    echo json_encode($response);
} else {
    $response = (object)[
        'masterstatus' => 'success',
        'msg' => 'Name has been added'
        ];

    echo json_encode($response);
}
?>