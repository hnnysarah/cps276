<?php

require_once "../classes/Pdo_methods.php";
$pdo = new PdoMethods();

$sql = "TRUNCATE TABLE names";


if (($pdo->otherNotBinded($sql)) === "error") {
    $response = (object)[
        'masterstatus' => 'error',
        'msg' => 'Could not delete data in database'
        ];

    echo json_encode($response);
} else {
    $response = (object)[
        'masterstatus' => 'success',
        'msg' => 'All names were deleted'
        ];

    echo json_encode($response);
}
?>